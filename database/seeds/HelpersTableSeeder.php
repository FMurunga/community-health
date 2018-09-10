<?php

use Illuminate\Database\Seeder;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\CommunityHealthWorkerType;

class HelpersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = array('Primary', 'Secondary', 'College/University');


        foreach ($education as $value)
         {
        	$education_level = new EducationLevel;
        	$education_level->name = $value;
        	$education_level->save();


        }

        $gender = array('Male','Female');


        foreach ($gender as $value) 
        {
        	# code...
        	$gender=new Gender;
        	$gender->name=$value;
        	$gender->save();

        }

        $marital_status=array('Single','Married','Divorced');


        foreach ($marital_status as $value) 
        {
        	# code...
        	$marital_status=new MaritalStatus;
        	$marital_status->name=$value;
        	$marital_status->save();
        }

        $chw_type = array('Commmunity Health Volunteer','Commmunity Health Extension Worker');



        foreach ($chw_type as $value) 
        {
        	# code...
        	$chw_type=new CommunityHealthWorkerType;
        	$chw_type->name=$value;
        	$chw_type->save();


         }
    }
}
