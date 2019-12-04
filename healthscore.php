<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>BorvoCare - Health Score</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>
</head>

<body class="healthscore">
<!-- ########## Main start ########## -->
<div class="main">
  <section class="header-bl mb3">
    <div class="container">
      <div class="row">
        <div class="col-md-6"> <a href="index.php"><img src="imgs/logo.svg" alt="" class="img-fluid"></a> </div>
        <div class="col-md-6">
          <div class="contact-info">
            <div><i class="fas fa-envelope"></i><a href="mailto:care@borvocare.com">care@borvocare.com</a></div>
            <div><i class="fas fa-phone"></i>0091-9122300044</div>
            <div><a href="https://borvocare.com/">www.borvocare.com</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="padding-top: 0;">
    <div class="container">
      <div class="row mb6">
        <div class="col-md-12">
          <h1 class="text-white font-bold text-center">Life Expectancy & Health Score Calculator</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post">
            <div id="healthscore-form">
              <ul id="progressbar" class="mb3">
                <li class="active">Basic Info</li>
                <li>Heart Disease</li>
                <li>Medical Aspects</li>
                <li>Medical Aspects
                  <div class="text-sm">(Only for women)</div>
                </li>
                <li>Nutrition</li>
                <li>Psychological Aspects</li>
              </ul>
              <!-- Step1 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Basic Info</h3>
                <div class="form-group">
                  <h5 class="label">Name</h5>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <h5 class="label">Age</h5>
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <h5 class="label">Sex</h5>
                      <select name="sex" id="sex" class="form-control">
                        <option value="">Male/Female</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <h5 class="label">Mobile Number</h5>
                      <input type="text" name="mobile" id="mobile" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h5 class="label">Address</h5>
                  <textarea name="address" id="address" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <h5 class="label">Email</h5>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <h5 class="label">Education</h5>
                  <label>
                    <input type="radio" name="education">
                    <span class="label-text">Masters</span> </label>
                  <label>
                    <input type="radio" name="education">
                    <span class="label-text">Bachelors</span> </label>
                  <label>
                    <input type="radio" name="education">
                    <span class="label-text">Graduate</span> </label>
                  <label>
                    <input type="radio" name="education">
                    <span class="label-text">School Graduate</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Hours of sleep a day</h5>
                  <label>
                    <input type="radio" name="sleep">
                    <span class="label-text">6-7 hours</span> </label>
                  <label>
                    <input type="radio" name="sleep">
                    <span class="label-text">8-9 hours</span> </label>
                  <label>
                    <input type="radio" name="sleep">
                    <span class="label-text">More than 9 hours</span> </label>
                  <label>
                    <input type="radio" name="sleep">
                    <span class="label-text">Less than 6 hours a day</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Longevity</h5>
                  <label>
                    <input type="radio" name="longevity">
                    <span class="label-text">My grandparents lived > 90 years</span> </label>
                  <label>
                    <input type="radio" name="longevity">
                    <span class="label-text">My grandparents lived < 90 years</span> </label>
                  <label>
                    <input type="radio" name="longevity">
                    <span class="label-text">Don't' Know</span> </label>
                </div>
                <input type="button" name="next" class="next btn btn-pink" value="Next">
              </fieldset>
              <!-- Step1 end --> 
              <!-- Step2 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Heart Disease</h3>
                <div class="form-group">
                  <h5 class="label">What is your blood pressure? (systolic / diastolic)</h5>
                  <label>
                    <input type="radio" name="bp">
                    <span class="label-text">Dont know</span> </label>
                  <label>
                    <input type="radio" name="bp">
                    <span class="label-text">< 110 / 60-80</span> </label>
                  <label>
                    <input type="radio" name="bp">
                    <span class="label-text">110-130 / 60-80</span> </label>
                  <label>
                    <input type="radio" name="bp">
                    <span class="label-text">130-150 / 80-90</span> </label>
                  <label>
                    <input type="radio" name="bp">
                    <span class="label-text">>150 /> 90-100</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you smoke?</h5>
                  <label>
                    <input type="radio" name="smoke">
                    <span class="label-text">Never</span> </label>
                  <label>
                    <input type="radio" name="smoke">
                    <span class="label-text">Sometimes</span> </label>
                  <label>
                    <input type="radio" name="smoke">
                    <span class="label-text">I stopped few years ago</span> </label>
                  <label>
                    <input type="radio" name="smoke">
                    <span class="label-text">1 packet of cigarette a day</span> </label>
                  <label>
                    <input type="radio" name="smoke">
                    <span class="label-text">2 or more packets of cigarettes a day</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you have any family history of heart disease?</h5>
                  <label>
                    <input type="radio" name="heartdisease">
                    <span class="label-text">Don't know</span> </label>
                  <label>
                    <input type="radio" name="heartdisease">
                    <span class="label-text">There is no family history of heart diseases</span> </label>
                  <label>
                    <input type="radio" name="heartdisease">
                    <span class="label-text">1 close relative > 60 years old with heart disease</span> </label>
                  <label>
                    <input type="radio" name="heartdisease">
                    <span class="label-text">1 close relative < 60 years old with heart disease</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Are you stressed?</h5>
                  <label>
                    <input type="radio" name="stressed">
                    <span class="label-text">No stress</span> </label>
                  <label>
                    <input type="radio" name="stressed">
                    <span class="label-text">Little stress</span> </label>
                  <label>
                    <input type="radio" name="stressed">
                    <span class="label-text">Mostly stressed and anxious</span> </label>
                  <label>
                    <input type="radio" name="stressed">
                    <span class="label-text">On medication for stress</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">How much physical activity do you do?</h5>
                  <label>
                    <input type="radio" name="exercise">
                    <span class="label-text">Almost everyday</span> </label>
                  <label>
                    <input type="radio" name="exercise">
                    <span class="label-text">3-5 Days of the week</span> </label>
                  <label>
                    <input type="radio" name="exercise">
                    <span class="label-text">1-2 Days of the week</span> </label>
                  <label>
                    <input type="radio" name="exercise">
                    <span class="label-text">I dont exercise</span> </label>
                </div>
                <input type="button" name="previous" class="previous btn btn-pink" value="Back" />
                <input type="button" name="next" class="next btn btn-pink" value="Next" />
              </fieldset>
              <!-- Step2 end --> 
              <!-- Step3 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Medical Aspects</h3>
                <div class="form-group">
                  <h5 class="label">Do you go for regular checkups?</h5>
                  <label>
                    <input type="radio" name="checkups">
                    <span class="label-text">I go for regular tests and consultation</span> </label>
                  <label>
                    <input type="radio" name="checkups">
                    <span class="label-text">I sometimes go for tests</span> </label>
                  <label>
                    <input type="radio" name="checkups">
                    <span class="label-text">I do not go for tests and consultation</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Have you ever had any surgery?</h5>
                  <textarea name="surgery" id="surgery" class="form-control" rows="4" placeholder="If yes, mention details"></textarea>
                </div>
                <div class="form-group">
                  <h5 class="label">Any heart related issues?</h5>
                  <label>
                    <input type="radio" name="heartissue">
                    <span class="label-text">There is no history of heart problem</span> </label>
                  <label>
                    <input type="radio" name="heartissue">
                    <span class="label-text">I have breathing difficulty not on medication</span> </label>
                  <label>
                    <input type="radio" name="heartissue">
                    <span class="label-text">I am on medication for heart disease</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you have any lungs related problems? <span class="text-sm">(including tuberculosis and pneumonia)</span></h5>
                  <label>
                    <input type="radio" name="lungsproblem">
                    <span class="label-text">I dont have any problems</span> </label>
                  <label>
                    <input type="radio" name="lungsproblem">
                    <span class="label-text">Some problems in the past</span> </label>
                  <label>
                    <input type="radio" name="lungsproblem">
                    <span class="label-text">Asthma / Lung problem</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you have any problem in digestion?</h5>
                  <label>
                    <input type="radio" name="digestion">
                    <span class="label-text">I dont have any problems</span> </label>
                  <label>
                    <input type="radio" name="digestion">
                    <span class="label-text">Constipation</span> </label>
                  <label>
                    <input type="radio" name="digestion">
                    <span class="label-text">Occasional diarrhoea, loss of appetite</span> </label>
                  <label>
                    <input type="radio" name="digestion">
                    <span class="label-text">Liver problems</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Any family history of diabetes?</h5>
                  <label>
                    <input type="radio" name="diabetes">
                    <span class="label-text">No family history of diabetes</span> </label>
                  <label>
                    <input type="radio" name="diabetes">
                    <span class="label-text">Family history of diabetes present</span> </label>
                  <label>
                    <input type="radio" name="diabetes">
                    <span class="label-text">Mild diabetes (Diet and exercise)</span> </label>
                  <label>
                    <input type="radio" name="diabetes">
                    <span class="label-text">Diabetes (Medicine/Insuline)</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Are you on any drugs and medication?</h5>
                  <label>
                    <input type="radio" name="medication">
                    <span class="label-text">I dont take any medication</span> </label>
                  <label>
                    <input type="radio" name="medication">
                    <span class="label-text">I take aspirins and other medication</span> </label>
                  <label>
                    <input type="radio" name="medication">
                    <span class="label-text">I regularly take other medications (Calcium/Multivitamins)</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Have you taken Hep A, Hep B, Influenza, Meningococcal, JE, Typhoid vaccinations?</h5>
                  <textarea name="vaccinations" id="vaccinations" class="form-control" rows="4" placeholder="If yes, mention details"></textarea>
                </div>
                <div class="form-group">
                  <h5 class="label">Medical history of any disease?(Self or family)</h5>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Epilepsy</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Arthritis</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Frequent Colds</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Dizziness/fainting</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Allergies</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Kidney Problems</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Food Intolerances</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Liver Problems</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Cancer</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Headaches</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">Migraines</span> </label>
                  <label>
                    <input type="radio" name="medicalhistory">
                    <span class="label-text">None</span> </label>
                </div>
                <input type="button" name="previous" class="previous btn btn-pink" value="Back" />
                <input type="button" name="next" class="next btn btn-pink" value="Next" />
              </fieldset>
              <!-- Step3 end --> 
              <!-- Step4 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Medical Aspects <span class="text-sm">(Only for women)</span></h3>
                <div class="form-group">
                  <h5 class="label">Do you get your examinations done regularly?</h5>
                  <label>
                    <input type="radio" name="examinations">
                    <span class="label-text">I go for gynecological and breast examinations</span> </label>
                  <label>
                    <input type="radio" name="examinations">
                    <span class="label-text">I have never had an examination</span> </label>
                  <label>
                    <input type="radio" name="examinations">
                    <span class="label-text">I have taken some gynecological treatment </span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you take contraceptive?</h5>
                  <label>
                    <input type="radio" name="contraceptive">
                    <span class="label-text">I have never taken it</span> </label>
                  <label>
                    <input type="radio" name="contraceptive">
                    <span class="label-text">I stopped few years ago</span> </label>
                  <label>
                    <input type="radio" name="contraceptive">
                    <span class="label-text">I am still taking them</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Any lumps in breasts?</h5>
                  <label>
                    <input type="radio" name="lumps">
                    <span class="label-text">Yes</span> </label>
                  <label>
                    <input type="radio" name="lumps">
                    <span class="label-text">No</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Menstrual history / Menopause</h5>
                  <textarea name="menstrual" id="menstrual" class="form-control" rows="4" placeholder="Please mention"></textarea>
                </div>
                <input type="button" name="previous" class="previous btn btn-pink" value="Back" />
                <input type="button" name="next" class="next btn btn-pink" value="Next" />
              </fieldset>
              <!-- Step4 end --> 
              <!-- Step5 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Nutrition</h3>
                <div class="form-group">
                  <h5 class="label">How often do you take breakfast?</h5>
                  <label>
                    <input type="radio" name="breakfast">
                    <span class="label-text">Everyday</span> </label>
                  <label>
                    <input type="radio" name="breakfast">
                    <span class="label-text">Sometimes</span> </label>
                  <label>
                    <input type="radio" name="breakfast">
                    <span class="label-text">Never</span> </label>
                  <label>
                    <input type="radio" name="breakfast">
                    <span class="label-text">Just a cup of tea/coffee</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">How many meals do you take in a day?</h5>
                  <label>
                    <input type="radio" name="meals">
                    <span class="label-text">3 or more</span> </label>
                  <label>
                    <input type="radio" name="meals">
                    <span class="label-text">2 a day</span> </label>
                  <label>
                    <input type="radio" name="meals">
                    <span class="label-text">Not regularly</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">How many servings of fruit and vegetables do you take everyday?</h5>
                  <label>
                    <input type="radio" name="fruits">
                    <span class="label-text">2 - 4 serving a day</span> </label>
                  <label>
                    <input type="radio" name="fruits">
                    <span class="label-text">1 serving a day</span> </label>
                  <label>
                    <input type="radio" name="fruits">
                    <span class="label-text">I don't eat fruit or vegetables</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">What kind of fats do you normally eat?</h5>
                  <label>
                    <input type="radio" name="fats">
                    <span class="label-text">Nuts, olive oil and fish</span> </label>
                  <label>
                    <input type="radio" name="fats">
                    <span class="label-text">Few fats, saturates included</span> </label>
                  <label>
                    <input type="radio" name="fats">
                    <span class="label-text">Fats, fried food and ready-made meals</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">How much alcohol do you consume in a day?</h5>
                  <label>
                    <input type="radio" name="alcohol">
                    <span class="label-text">Never</span> </label>
                  <label>
                    <input type="radio" name="alcohol">
                    <span class="label-text">Occasionally</span> </label>
                  <label>
                    <input type="radio" name="alcohol">
                    <span class="label-text">2-3 alcoholic drinks a day</span> </label>
                  <label>
                    <input type="radio" name="alcohol">
                    <span class="label-text">More than 6 drinks a day</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you take supplements?</h5>
                  <label>
                    <input type="radio" name="supplements">
                    <span class="label-text">Yes</span> </label>
                  <label>
                    <input type="radio" name="supplements">
                    <span class="label-text">No</span> </label>
                </div>
                <input type="button" name="previous" class="previous btn btn-pink" value="Back" />
                <input type="button" name="next" class="next btn btn-pink" value="Next" />
              </fieldset>
              <!-- Step5 end --> 
              <!-- Step6 start -->
              <fieldset>
                <h3 class="font-bold text-pink mb2">Psychological Aspects</h3>
                <div class="form-group">
                  <h5 class="label">Are you happy?</h5>
                  <label>
                    <input type="radio" name="happy">
                    <span class="label-text">I am satisfied in life</span> </label>
                  <label>
                    <input type="radio" name="happy">
                    <span class="label-text">I am insecure about life</span> </label>
                  <label>
                    <input type="radio" name="happy">
                    <span class="label-text">I am unhappy in life</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you feel depressed?</h5>
                  <label>
                    <input type="radio" name="depressed">
                    <span class="label-text">There is no family history of depression</span> </label>
                  <label>
                    <input type="radio" name="depressed">
                    <span class="label-text">There is a family history of depression but I'm feeling okay</span> </label>
                  <label>
                    <input type="radio" name="depressed">
                    <span class="label-text">I am depressed at times</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Do you have anxiety?</h5>
                  <label>
                    <input type="radio" name="anxiety">
                    <span class="label-text">Rarely anxious</span> </label>
                  <label>
                    <input type="radio" name="anxiety">
                    <span class="label-text">I am sometimes anxious</span> </label>
                  <label>
                    <input type="radio" name="anxiety">
                    <span class="label-text">I have panic attacks</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">How much relaxed are you?</h5>
                  <label>
                    <input type="radio" name="relaxed">
                    <span class="label-text">I meditate or relax daily</span> </label>
                  <label>
                    <input type="radio" name="relaxed">
                    <span class="label-text">I relax frequently</span> </label>
                  <label>
                    <input type="radio" name="relaxed">
                    <span class="label-text">I am normally tense</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Love and marriage</h5>
                  <label>
                    <input type="radio" name="lovemarriage">
                    <span class="label-text">Happily married</span> </label>
                  <label>
                    <input type="radio" name="lovemarriage">
                    <span class="label-text">Single</span> </label>
                  <label>
                    <input type="radio" name="lovemarriage">
                    <span class="label-text">Divorced or widowed</span> </label>
                  <label>
                    <input type="radio" name="lovemarriage">
                    <span class="label-text">In an affair</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Work satisfaction</h5>
                  <label>
                    <input type="radio" name="worksatisfaction">
                    <span class="label-text">I enjoy my job</span> </label>
                  <label>
                    <input type="radio" name="worksatisfaction">
                    <span class="label-text">My job is good but I don't enjoy it</span> </label>
                  <label>
                    <input type="radio" name="worksatisfaction">
                    <span class="label-text">I don´t like my job</span> </label>
                </div>
                <div class="form-group">
                  <h5 class="label">Social life</h5>
                  <label>
                    <input type="radio" name="sociallife">
                    <span class="label-text">I have a few close friends</span> </label>
                  <label>
                    <input type="radio" name="sociallife">
                    <span class="label-text">I have some friends</span> </label>
                  <label>
                    <input type="radio" name="sociallife">
                    <span class="label-text">I don't have any friends</span> </label>
                </div>
                <input type="button" name="previous" class="previous btn btn-pink" value="Back" />
                <input type="submit" name="submit" class="submit btn btn-pink" value="Submit" />
              </fieldset>
              <!-- Step6 end -->
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- ########## Main end ########## --> 

<!-- ########## Footer start ########## -->
<footer>
  <section class="footer-btm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright"> &copy; 2018 All Rights Reserved, Borvo Care Pvt Ltd. <a href="terms.php">Terms &amp; Conditions</a> | <a href="privacy.php">Privacy</a> </div>
          <div class="poweredby"><span>Powered By:</span> <img src="imgs/logo-pct.png" alt=""><a href="http://www.purplecherrytechnologies.com/" target="_blank">Purple Cherry Technologies</a> </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- ########## Footer end ########## --> 

<!-- Bootstrap JavaScript --> 
<script src="plugins/jquery/jquery-3.3.1.min.js"></script> 
<script src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Steps Script --> 
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> --> 
<script type="text/javascript" src="plugins/jquery/jquery.easing.min.js""></script> 
<script type="text/javascript">
  //jQuery time
(function($) {
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = (now * 50) + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')'
        });
        next_fs.css({
          'left': left,
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

  $(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = ((1 - now) * 50) + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'left': left
        });
        previous_fs.css({
          'transform': 'scale(' + scale + ')',
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

})(jQuery);
</script>
</body>
</html>
