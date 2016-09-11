<?php 
session_start();
include '../model/user.php';
require_once  '../model/Facebook/autoload.php';
include '../model/facebook/facebook.php';
$fb = new Facebook\Facebook([
  'app_id' => '569792603209821',
  'app_secret' => 'cbbc074a20df575e166172db24d5bfff',
  'default_graph_version' => 'v2.7',
]);
$permissions = ['public_profile,user_birthday','email'];
$redirect = 'http://localhost/smartroomandmatefinder/view/index.php';
$helper = $fb->getRedirectLoginHelper();
try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
if (isset($accessToken)) {
        // Logged in!
        // Now you can redirect to another page and use the
        // access token from $_SESSION['facebook_access_token'] 
        // But we shall we the same page

        // Sets the default fallback access token so 
        // we don't have to pass it to each request
        $fb->setDefaultAccessToken($accessToken);

        try {
          $response = $fb->get('/me?fields=email,name,gender,birthday,age_range,updated_time');
          $userNode = $response->getGraphUser();
        }catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
               
        $name= $userNode->getName();
                $f = array();
                $f = explode(" ", $name);
        $id = $userNode->getId();
        $gender = $userNode->getGender();
        $email = $userNode->getProperty('email');
        $image = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=200';
        $birthday = $userNode->getBirthday();
        $us = User::findByFacebookid($id);
                 $Fbdata = array("email"=>$userNode->getProperty('email'),"image"=>$image,"id"=>$id,"name"=>$f[0],"last"=>$f[1],"gender"=>$gender,"birthday"=>$birthday);
                if($us!=null){
                    $_SESSION["user"] = $us;
                    header('Location: index.php');
                   
                }
                else{
                     echo "Birthday:". date_format($birthday, 'Y-m-d');
                   $_SESSION["fbdata"] = $Fbdata ;
                    header('Location: Profile.php');
                }

    }else{
        $loginUrl = $helper->getLoginUrl($redirect,$permissions);
        echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
    }
 ?>

<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color:black">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><i class=" fa fa-search" style="color:#fec503"></i>Smart Room and Mate Finder</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Guide</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $loginUrl ?>">Login with Facebook</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

