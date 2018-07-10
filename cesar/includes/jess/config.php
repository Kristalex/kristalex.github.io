<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: kristina.com
$siteKey = "";
$secretKey = "";


//echo basename($_SERVER['PHP_SELF']);
//die;


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo "constant: " . THIS_PAGE;
//die;


switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Home Page - Sportsthink 360';
        $subNavOne = '<li>Home</li>';
        $subNavTwo = ' ';
        $subNavThree = ' ';
        $pageHero = 'homePage';
        $pageTagline = 'Lorem ipsum dolor amet kickstarter vinyl prism kitsch tilde vice meditation ';
    break;
        
    case 'about.php':
        $title = 'About Us - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>About Us</li>';
        $subNavThree = ' ';
        $pageHero = 'aboutPage';
        $pageTagline = ' Asymmetrical normcore pitchfork PBR&B activated charcoal tbh cloud bread lo-fi.';
    break;
        

    case 'program-1.php':
        $title = 'Sponsorship Curriculum - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Programs</li>';
        $subNavThree = '<li>Sponsorship Curriculum</li> ';
        $pageHero = 'program1-page';
        $pageTagline = 'Meh celiac XOXO kale chips intelligentsia cold-pressed';
    break;        
        
    case 'program-2.php':
        $title = 'Talented Athlete Program - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Programs</li>';
        $subNavThree = '<li>Talented Athlete Program</li> ';
        $pageHero = 'program2-page';
        $pageTagline = 'Pickled kickstarter asymmetrical';
    break;  
        
    case 'program-3.php':
        $title = 'Sportsthink Talk- Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Programs</li>';
        $subNavThree = '<li>Sportsthink Talk</li> ';
        $pageHero = 'program3-page';
        $pageTagline = 'Pickled kickstarter asymmetrical';
    break;      
    
    case 'program-4.php':
        $title = 'Expert Training- Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Programs</li>';
        $subNavThree = '<li>Expert Training</li> ';
        $pageHero = 'program4-page';
        $pageTagline = 'Pickled kickstarter asymmetrical';
    break;  

    case 'advice.php':
        $title = 'Advice - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Advice</li>';
        $subNavThree = ' ';
        $pageHero = 'advicePage';
        $pageTagline = 'Cloud bread flexitarian 3 wolf moon everyday carry';
    break;        
        break;

    case 'contact.php':
        $title = 'Contact Us - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Contact</li>';
        $subNavThree = ' ';
        $pageHero = 'contactPage';
        $pageTagline =  'Cloud bread flexitarian 3 wolf moon everyday carry';
    break;        
              
    case 'disclaimer.php':
        $title = 'Disclaimer - Sportsthink 360';
        $subNavOne = '<li><a href="index.php">Home</a></li>';
        $subNavTwo = '<li>Disclaimer</li>';
        $subNavThree = ' ';
        $pageHero = 'disclaimerPage';
        $pageTagline = '';
    break;
    default:
        $title = THIS_PAGE;
        $pageTagline = '';
        break;
        
}
