<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wheel of well-being</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
  <script src="less.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>


  <!-- Bootstrap CSS -->

</head>

<body onload="wheelGraph()">

  <script>
  function wheelGraph() {
    //from   w w  w. j  a v  a 2  s . c  o  m
    var Society = document.wheelForm.radio1.value,
    Family = document.wheelForm.radio2.value,
    Fun = document.wheelForm.radio3.value,
    Health = document.wheelForm.radio4.value,
    Money = document.wheelForm.radio5.value,
    Career = document.wheelForm.radio6.value,
    Environment = document.wheelForm.radio7.value,
    Relation = document.wheelForm.radio8.value,
    ctx = document.getElementById('wheelratio');
    var data = {
      labels: ["Contribution to society", "Family", "Fun and leisure", "Health and fitness", "Money / Finances", "Achievements / Career", "Environment", "Relationships / Friendships",],
      datasets: [{
        data: [Society, Family, Fun, Health, Money, Career, Environment, Relation],
        borderWidth: 3,
        borderAlign:'inner',
        borderColor: '#000',
        backgroundColor: ["#003366", "#006666", "#cc3300", "#cc0052", "#bfff00", "#99ccff", "#3333cc", "#009933"],
        hoverBackgroundColor: ["#004d99", "#009999", "#ff4000", "#ff1a75", "#ccff33", "#cce6ff","#7070db","#00cc44"],
        hoverBorderColor:'#fff',
        hoverBorderWidth:6,
      }]
    };
    /*var options = {};*/
    new Chart(ctx, {
      type: 'polarArea',
      data: data,
      options:{
        scale: {
          ticks: {
            min: 0,
            max: 10
          }
        }
      }
    });
  }

  function reflexionText(reflexion){
    var yourUl = document.getElementById("questions");
    yourUl.style.display = yourUl.style.display === 'none' ? '' : 'none';
  }
  function scrollingChart(){
    var elmnt = document.getElementById("reflexion1");
    elmnt.scrollIntoView();
  }
  </script>
  <div id="topBar">
    <!--<h1>Wheel of well-being</h1>-->
    <h1>Finding balance in an executive role… mission possible!</h1>
    <!--<h2><span style="color:red;">Title of the activity</span>:  Finding balance in an executive role… mission possible!</h2>-->

  </div>
  <div class="full-width"></div>
  <div class="container-fluid">
    <p>This simple and powerful coaching tool will help you in achieving the right work-life balance</p>
    <ul>
      <li>The Wheel of Life exercise is a simple but powerful coaching tool that can help you in finding work-life balance and increase your level of personal satisfaction</li>
      <li>After completing this activity, you will have a snapshot of the areas of your life that are either in balance or out of balance. The peer coaching conversation will help you identify actions for implementing the changes you wish to make.</li>
      <li>Consider doing this exercise periodically to fully benefit from it.</li>
    </ul>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="exercise col-lg-8">
        <h2 style="color:rgb(63, 42, 86);">How to complete the exercise</h2>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="exercise2 col-lg-8">
        <p>Below, select your current level of satisfaction with each area of life (1 = very dissatisfied, and 10 = fully satisfied).</p>

      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="container-fluid">
      <h2 style="text-align:center;font-size:1.5em;color:rgb(63, 42, 86);">Balance is personal and unique to each individual.<br> What may be satisfying or balanced for one person may be stressful or boring for someone else.</h2>
      <form name="wheelForm" method="post">
        <div class="row">
          <div class="form1 society col-lg-6">
            <legend>Contribution to society</legend>
            <fieldset>
              <label><input type="radio" id="radio11" name="radio1" value="1"><span>1</span></label>
              <label><input type="radio" id="radio12" name="radio1" value="2"><span>2</span></label>
              <label><input type="radio" id="radio14" name="radio1" value="3"><span>3</span></label>
              <label><input type="radio" id="radio13" name="radio1" value="4"><span>4</span></label>
              <label><input type="radio" id="radio15" name="radio1" value="5"><span>5</span></label>
              <label><input type="radio" id="radio16" name="radio1" value="6"><span>6</span></label>
              <label><input type="radio" id="radio17" name="radio1" value="7"><span>7</span></label>
              <label><input type="radio" id="radio18" name="radio1" value="8"><span>8</span></label>
              <label><input type="radio" id="radio19" name="radio1" value="9"><span>9</span></label>
              <label><input type="radio" id="radio110"name="radio1" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 family col-lg-6">
            <legend>Family</legend>
            <fieldset>
              <label><input type="radio" id="radio21" name="radio2" value="1"><span>1</span></label>
              <label><input type="radio" id="radio22" name="radio2" value="2"><span>2</span></label>
              <label><input type="radio" id="radio23" name="radio2" value="3"><span>3</span></label>
              <label><input type="radio" id="radio24" name="radio2" value="4"><span>4</span></label>
              <label><input type="radio" id="radio25" name="radio2" value="5"><span>5</span></label>
              <label><input type="radio" id="radio26" name="radio2" value="6"><span>6</span></label>
              <label><input type="radio" id="radio27" name="radio2" value="7"><span>7</span></label>
              <label><input type="radio" id="radio28" name="radio2" value="8"><span>8</span></label>
              <label><input type="radio" id="radio29" name="radio2" value="9"><span>9</span></label>
              <label><input type="radio" id="radio210"name="radio2" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 fun col-lg-6">
            <legend>Fun and leisure</legend>
            <fieldset>
              <label><input type="radio" id="radio31" name="radio3" value="1"><span>1</span></label>
              <label><input type="radio" id="radio32" name="radio3" value="2"><span>2</span></label>
              <label><input type="radio" id="radio33" name="radio3" value="3"><span>3</span></label>
              <label><input type="radio" id="radio34" name="radio3" value="4"><span>4</span></label>
              <label><input type="radio" id="radio35" name="radio3" value="5"><span>5</span></label>
              <label><input type="radio" id="radio36" name="radio3" value="6"><span>6</span></label>
              <label><input type="radio" id="radio37" name="radio3" value="7"><span>7</span></label>
              <label><input type="radio" id="radio38" name="radio3" value="8"><span>8</span></label>
              <label><input type="radio" id="radio39" name="radio3" value="9"><span>9</span></label>
              <label><input type="radio" id="radio310"name="radio3" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 health col-lg-6">
            <legend>Health and fitness</legend>
            <fieldset>
              <label><input type="radio" id="radio41" name="radio4" value="1"><span>1</span></label>
              <label><input type="radio" id="radio42" name="radio4" value="2"><span>2</span></label>
              <label><input type="radio" id="radio43" name="radio4" value="3"><span>3</span></label>
              <label><input type="radio" id="radio44" name="radio4" value="4"><span>4</span></label>
              <label><input type="radio" id="radio45" name="radio4" value="5"><span>5</span></label>
              <label><input type="radio" id="radio46" name="radio4" value="6"><span>6</span></label>
              <label><input type="radio" id="radio47" name="radio4" value="7"><span>7</span></label>
              <label><input type="radio" id="radio48" name="radio4" value="8"><span>8</span></label>
              <label><input type="radio" id="radio49" name="radio4" value="9"><span>9</span></label>
              <label><input type="radio" id="radio410" name="radio4" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 money col-lg-6">
            <legend>Money / Finances</legend>
            <fieldset>
              <label><input type="radio" id="radio51" name="radio5" value="1"><span>1</span></label>
              <label><input type="radio" id="radio52" name="radio5" value="2"><span>2</span></label>
              <label><input type="radio" id="radio53" name="radio5" value="3"><span>3</span></label>
              <label><input type="radio" id="radio54" name="radio5" value="4"><span>4</span></label>
              <label><input type="radio" id="radio55" name="radio5" value="5"><span>5</span></label>
              <label><input type="radio" id="radio56" name="radio5" value="6"><span>6</span></label>
              <label><input type="radio" id="radio57" name="radio5" value="7"><span>7</span></label>
              <label><input type="radio" id="radio58" name="radio5" value="8"><span>8</span></label>
              <label><input type="radio" id="radio59" name="radio5" value="9"><span>9</span></label>
              <label><input type="radio" id="radio510"name="radio5" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 career col-lg-6">
            <legend>Achievements / Career</legend>
            <fieldset>
              <label><input type="radio" id="radio61" name="radio6" value="1"><span>1</span></label>
              <label><input type="radio" id="radio62" name="radio6" value="2"><span>2</span></label>
              <label><input type="radio" id="radio63" name="radio6" value="3"><span>3</span></label>
              <label><input type="radio" id="radio64" name="radio6" value="4"><span>4</span></label>
              <label><input type="radio" id="radio65" name="radio6" value="5"><span>5</span></label>
              <label><input type="radio" id="radio66" name="radio6" value="6"><span>6</span></label>
              <label><input type="radio" id="radio67" name="radio6" value="7"><span>7</span></label>
              <label><input type="radio" id="radio68" name="radio6" value="8"><span>8</span></label>
              <label><input type="radio" id="radio69" name="radio6" value="9"><span>9</span></label>
              <label><input type="radio" id="radio610"name="radio6" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 environment col-lg-6">
            <legend>Environment</legend>
            <p style="text-align:center;">Personal and professional physical environment</p>
            <fieldset>
              <label><input type="radio" id="radio71" name="radio7" value="1"><span>1</span></label>
              <label><input type="radio" id="radio72" name="radio7" value="2"><span>2</span></label>
              <label><input type="radio" id="radio73" name="radio7" value="3"><span>3</span></label>
              <label><input type="radio" id="radio74" name="radio7" value="4"><span>4</span></label>
              <label><input type="radio" id="radio75" name="radio7" value="5"><span>5</span></label>
              <label><input type="radio" id="radio76" name="radio7" value="6"><span>6</span></label>
              <label><input type="radio" id="radio77" name="radio7" value="7"><span>7</span></label>
              <label><input type="radio" id="radio78" name="radio7" value="8"><span>8</span></label>
              <label><input type="radio" id="radio79" name="radio7" value="9"><span>9</span></label>
              <label><input type="radio" id="radio710"name="radio7" value="10"><span>10</span></label>
            </fieldset>
          </div>
          <div class="form1 col-lg-6">
            <legend>Relationships / Friendships</legend>
            <fieldset>
              <label><input type="radio" id="radio81" name="radio8" value="1"><span>1</span></label>
              <label><input type="radio" id="radio82" name="radio8" value="2"><span>2</span></label>
              <label><input type="radio" id="radio83" name="radio8" value="3"><span>3</span></label>
              <label><input type="radio" id="radio84" name="radio8" value="4"><span>4</span></label>
              <label><input type="radio" id="radio85" name="radio8" value="5"><span>5</span></label>
              <label><input type="radio" id="radio86" name="radio8" value="6"><span>6</span></label>
              <label><input type="radio" id="radio87" name="radio8" value="7"><span>7</span></label>
              <label><input type="radio" id="radio88" name="radio8" value="8"><span>8</span></label>
              <label><input type="radio" id="radio89" name="radio8" value="9"><span>9</span></label>
              <label><input type="radio" id="radio810"name="radio8" value="10"><span>10</span></label>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <button type="button" onclick="wheelGraph();scrollingChart();reflexionText();">Create your wheel</button>
      </div>
    </form>

    <h2>Your Wheel of well-being</h2>
    <!--<canvas id="wheelratio" ></canvas> -->
    <div id="chart">
      <canvas id="wheelratio" width="1000" height="1000"></canvas>
    </div>
    <div id="reflexion1">

      <div id="questions" class="col-lg-12" style="display:none;">
        <div class="row">
          <div class="coaching col-lg-12">
            <h2>Exploratory Coaching Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="questionsForm col-lg-5">
            <p>How do you feel about your life as you look at your wheel?</p>
            <textarea style="width:500px;height:200px;"></textarea>
          </div>
          <div class="col-lg-2"></div>
          <div class="questionsForm col-lg-5">
            <p>Is there anything that surprises you?</p>
            <textarea style="width:500px;height:200px;"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="questionsForm col-lg-5">
            <p>Which area do you tend to neglect or avoid?<br> What impact does that have?</p>
            <textarea style="width:500px;height:200px;"></textarea>
          </div>
          <div class="col-lg-2"></div>
          <div class="questionsForm col-lg-5">
            <p>Which of these areas would you most like to improve?<br> Why are they important to you?</p>
            <textarea style="width:500px;height:200px;"></textarea>
          </div>
        </div>
          <div class="row">
            <div class="questionsForm col-lg-12">
              <p>After having reflect at your wheel of life, think of a SMART goal that you will bring at the step 2 for the peer coaching conversation. (SMART: Specific, Measurable, Attainable, Relevant, Time-based).</p>
              <textarea style="width:1000px;height:200px;"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="exercise">
        <h3>To save your wheel of well-being for future uses:</h3>
        <ul>
          <li>Hold the Control (Ctrl) and the P key at the same time.</li>
          <li>Inside the new page that opened, click on destination and change the destination to Save as PDF</li>
          <li>Optionally, you can decide which pages you want to keep by clicking on the Pages dropdown and clicking on custom.</li>
          <li>Once the Save as PDF option has been clicked navigate to the Print button and choose where you want to save it on your computer.</li>
        </ul>
      </div>
    </div>
  </body>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </html>
