<?php


    function getAllMondaysOfMonth($year, $month)
    {
        
        $date = dateTime::createFromFormat('Yn', $year. $month);
       
        $monthName = date("F", mktime(0, 0, 0, $month, 0));
        
        $date1 = new DateTime('first monday of '.$monthName. ' '. $year);
        $date2 = new DateTime('second monday of '.$monthName.' '. $year); 
        $date3 = new DateTime('third monday of '.$monthName.' '. $year);
        $date4 = new DateTime('fourth monday of '.$monthName. ' '. $year);
        $date5 = new DateTime('last monday of '.$monthName.' '. $year);
        
        $mondays = [];
        $dateAsString = $date->format('D d, M Y');
        $mondays[] = $date1->format('l j, M Y');
        $mondays[] = $date2->format('l j, M Y');
        $mondays[] = $date3->format('l j, M Y');
        
        if($date3 != $date4)
        {
            $mondays[] = $date4->format('l j, M Y');
        }
        if($date4 != $date5)
        {
            $mondays[] = $date5->format('l j, M Y');
        }
        return $mondays;
        
        /*$date = dateTime::createFromFormat('Yn', $year.$month);
        $date = new DateTime('first day of' .$date->format('F Y'));
        $lastDate = new DateTime();
        $lastDate->add(new DateInterval('+1month'));
        
        
        while (strtotime($date) <= strtotime($lastDate)) {
            
            if ($date->format('m') == $month);
            {
                $dateAsString = $date->format('D d, M Y');
                $mondayArray = [];
                array_push($mondayArray, $dateAsString);
                $mondays[] = $date->format('l j, M Y');
            }
            return $mondayArray;
        }*/
    }



