<?php
class StaticController
{
  static public function displayHome()
  {
    $params = array();
    $params['body'] = 'home.php';
    $params['title'] = 'SimpleFi - Home';

    getTemplate()->display('baseplate.php', $params);
  }

  static public function displayHowItWorks()
  {
    $params = array();
    $params['body'] = 'howitworks.php';
    $params['title'] = 'SimpleFi - How it works';
    $params['message'] = 'Hello everyone';

    getTemplate()->display('baseplate.php', $params);
  }

  static public function displayEmployee()
  {
    $params = array();
    $params['body'] = 'employee.php';
    $params['title'] = 'SimpleFi - Employee';
    $params['message'] = 'Hello everyone';

    getTemplate()->display('baseplate.php', $params);
  }

  static public function displayEmployers()
  {
    $params = array();
    $params['body'] = 'employers.php';
    $params['title'] = 'SimpleFi - Employers';

    getTemplate()->display('baseplate.php', $params);
  }

  static public function displayAboutUs()
  {
    $params = array();
    $params['body'] = 'aboutus.php';
    $params['title'] = 'SimpleFi - About us';

    getTemplate()->display('baseplate.php', $params);
  }

  static public function displayContactUs()
  {
    $params = array();
    $params['body'] = 'contactus.php';
    $params['title'] = 'SimpleFi - Contact us';

    getTemplate()->display('baseplate.php', $params);
  }
}
?>
