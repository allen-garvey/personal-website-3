<?php

namespace App\Http\Controllers;


class CodeController extends ArrayController
{   
    protected function getModel(){
        $code_model = [];
    
        $code_model['wordpop'] = ['title' => 'Wordpop', 'link' => 'https://github.com/allen-garvey/wordpop-node', 'release_date' => '08/15/2015', 'icon_url' => 'wordpop-icon.png', 
                        'description' => "I wanted some practice in data visualization and creating infographics, so I created this web app using d3.js and node.js to dynamically display word frequencies in Craigslist listings in scatterplot and bar graph formats."];

        $code_model['h-news'] = ['title' => 'H-News', 'link' => 'http://hnews.co', 'release_date' => '06/28/2015', 'icon_url' => 'h-news-icon.svg', 
                        'description' => "A redesign of <a href='http://news.ycombinator.com'>Hacker News</a> with an emphasis on mobile first design and usability. Uses the official Hacker News API for story data and jQuery to populate the page with stories using AJAX."];
        
        $code_model['annuncified'] = ['title' => 'Annuncified', 'link' => 'https://github.com/allen-garvey/annuncified', 'release_date' => '05/19/2015', 'icon_url' => 'annuncified-icon.png', 
                        'description' => "A native Android app that allows you to set ringtones per group and custom notification sounds per contact or group. Additionally, it can automatically silence calls and texts from non-contacts."];
        
        $code_model['android-inflater'] = ['title' => 'Android Inflater', 'link' => 'android-inflater/', 'release_date' => '02/10/2015', 'icon_url' => 'android-inflater-icon.png', 
                        'description' => "To increase productivity when accessing Android XML layout widgets in Java code, I wrote a Python script automate it for me. That evolved into a web app that uses JavaScript to parse the XML layout files and Bootstrap and Angular to display the results."];
        
        $code_model['font-check'] = ['title' => 'Font Check', 'link' => 'https://github.com/allen-garvey/font-check/', 'release_date' => '02/05/2015', 'icon_url' => 'font-check-icon.png', 
                        'description' => "To make it easier to compare fonts, I created this native Mac app using Swift to automatically display all the fonts installed on my computer."];
        
        $code_model['perfect-pitch-trainer'] = ['title' => 'Perfect Pitch Trainer', 'link' => 'perfect-pitch-trainer/', 'release_date' => '12/20/2014', 'icon_url' => 'perfect-pitch-trainer-icon.png', 
                        'description' => "In music school, I was interested in perfect pitch training, or learning to identify notes without a reference point. This web app(created using JavaScript and Angular) would have been helpful at that time. I also used Apache Cordova to create native iOS and Android versions of the app."];

        return $code_model;
    }

    protected function getPageTitle(){
        return "Code";
    }
    
}
