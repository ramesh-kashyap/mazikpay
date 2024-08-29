<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
class Cron extends Controller
{


public function generate_roi()
{  

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");

if ($allResult) 
{
 foreach ($allResult as $key => $value) 
 {
  
  $userID=$value->user_id;
   $joining_amt = $value->amount;
 
  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails) 
  {
     $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','Roi Bonus')->sum("comm");
      $total_profit=($total_profit_b)?$total_profit_b:0;
        $sponsor_cnt=User::where('sponsor',$userID)->where('active_status','Active')->count();
       $total_get=$joining_amt*300/100;
        
        $percent= 0.5;
        if($sponsor_cnt>=2)
        {
           $percent= 1;  
        }
       $roi = $joining_amt*$percent/100; 
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }  
      if ($total_profit<$total_get && $roi>0) 
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'Roi Bonus';
        $data['comm'] = $roi;
        $data['amt'] = $joining_amt;
        $data['invest_id']=$value->id;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id; 
      $income = Income::firstOrCreate(['remarks' => 'Roi Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
      add_level_income($userDetails->id,$roi);
       
      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
      }



  }
  




 }
} 




}



public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      
      $username=$value->username;
      $days=100;
        $sponsor_cnt=User::where('sponsor',$user_id)->where('active_status','Active')->count();
       
       if($sponsor_cnt>=5)
       {
       $amount= 1;
       if($sponsor_cnt>=10)
       {
         $amount= 2;   
       }
       if($sponsor_cnt>=20)
       {
         $amount= 5;   
       }
          
     $check_level=Income::where('remarks','Reward Bonus')->where('amt',$amount)->count("id");
     if($check_level<$days)
     {
         
              echo "<br>";
          echo "ID : ".$username."<br>";
        //   echo "Level : ".$Level;
            $award['remarks'] = 'Reward Bonus';
            $award['amt'] = $amount;
            $award['comm'] = $amount;
            $award['level']=0;
            $award['ttime'] = date("Y-m-d");
            $award['user_id_fk'] =$username;
            $award['user_id']=$user_id; 
          $income = Income::firstOrCreate(['remarks' => 'Reward Bonus','ttime'=>date("Y-m-d"),'user_id'=>$user_id],$award);    
     }
   
     
       }
    
     
      
     
     }
    } 

}





public function matching_bonus()

{  

//   User::where('id',20)->update(['name' =>'Rameshk']);
$allResult=User::where('active_status','Active')->get();
date_default_timezone_set("Asia/Kolkata");
if ($allResult) 
{
 foreach ($allResult as $key => $value) 
 {
  
   $userID=$value->id;
    $userName=$value->username;
    $Package=$value->cap_amount;
    $todays=date("Y-m-d");  
    
    $rightTeam_arr=$this->team_by_position($userID,'Right');
    $leftTeam_arr=$this->team_by_position($userID,'Left');
      $Preview_date=date('Y-m-d H:i:s', strtotime('+1 day', strtotime($value->adate)));
//   $Preview_date=$todays;
    $lastInvestment=Investment::where('user_id',$userID)->where('status','Active')->orderBy('id','DESC')->limit(1)->first();
    $capping=($lastInvestment)?$lastInvestment->capping:0;
      $left_direct=User::where('sponsor',$userID)->where('active_status','Active')->where('position','Left')->count('id'); 
     $right_direct=User::where('sponsor',$userID)->where('position','Right')->where('active_status','Active')->count('id');

   if ($left_direct>0 && $right_direct>0)
    {

     $leftTeam=User::select('id')->whereIn('id',$leftTeam_arr)->where('active_status','Active')->count();
     $rightTeam=User::select('id')->whereIn('id',$rightTeam_arr)->where('active_status','Active')->count();
  
     $total_right=($rightTeam)?$rightTeam:0;
     $total_left=($leftTeam)?$leftTeam:0;
    
     if(($total_right>1) && ($total_left>0) || ($total_left>1) && ($total_right>0))
   {

       $tleftpackage=($total_left)? $total_left:0;
       $trightpackage=($total_right)? $total_right:0;
      // $amount = $tleftpackage+$trightpackage; 
      if($tleftpackage<$trightpackage)
       {
       $amount = $tleftpackage;   
       $curry = $trightpackage-$tleftpackage;  
       $cutPairSide= 1;  
       }
      if($tleftpackage>$trightpackage)
      {
       $amount = $trightpackage;   
       $curry = $tleftpackage-$trightpackage;  
        $cutPairSide= 2;    
      }
      if($tleftpackage==$trightpackage)
      {
        $amount = $trightpackage-1;
        $curry = $tleftpackage-$trightpackage;
        $cutPairSide= 1;

      }
      
        // $amount= $amount/2;
          
      $mtching=Income::where('user_id',$userID)->where('remarks','Binary Income')->orderBy('id', 'DESC')->limit(1)->sum('amt');
           $amount=$amount;
           $tamount = $amount;
          $amount_total = $amount - $mtching;
          $amount = $amount - $mtching;
          $curent_amount = $amount - $mtching;
          
          
          $amount = $amount*500;    
                    
            if($amount>=$capping)
            {
                $amount=$capping;
            }

      if ($amount>0)
       {
        echo "ID:".$userName." amounts:".$amount."<br>";
        $data['remarks'] = 'Binary Income';
        $data['comm'] = $amount;
        $data['amt'] = $tamount;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userName;
        $data['tleft']=$tleftpackage;
        $data['tright']=$trightpackage;
        $data['user_id']=$userID; 
        $data['curry']=$curry;
      //  $income = Income::create($data);
       $income = Income::firstOrCreate(['remarks' => 'Binary Income','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);

      }


  }
   

 }

  }
}
}



}
