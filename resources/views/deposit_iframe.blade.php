<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title></title>
  <!-- ######### CSS STYLES ######### -->

  <link rel="stylesheet" href="{{asset('asset2/sdata/css/reset.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('asset2/sdata/css/bootstrap/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{asset('asset2/sdata/css/style.css')}}" type="text/css">
  <link href="{{ asset('asset2/sdata/css/s__style.css')}}" stype="text/css" rel="stylesheet">
  <!-- responsive devices styles -->
  <link rel="stylesheet" media="screen" href="{{asset('asset2/sdata/css/responsive-leyouts.css')}}" type="text/css">
  <script src="{{asset('asset2/sdata/js/dummy.js')}}"></script>
</head>

<body>


  <div class="section_holder7 s__section_holder7">
    <div class="container">
      <div class="jumbotron testimony-super">
        <div class="jumbotron testimony-con">
          <p class="lead">Last Investments</p>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center investment-list">
              <span class="investors"></span>
              <span class="badge badge-primary badge-pill investment-badge"></span>
            </li>
          </ul>
        </div>
        <div class="jumbotron testimony-con withdraw-con">
          <p class="lead">Last Withdrawals</p>
          <ul class="list-group withdraw-list">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="cashout"></span>
              <span class="badge badge-primary badge-pill withdrawal-badge"></span>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    setInterval(() => {

      // investment
      let items = document.querySelectorAll('.investment-badge');
      items.forEach(function (item) {
        function getRandomInt(min, max) {
          min = Math.ceil(200);
          max = Math.floor(15000);
          fillNum = Math.floor(Math.random() * (max - min)) +
            min; //The maximum is exclusive and the minimum is inclusive

        }
        getRandomInt()
        item.innerHTML = "$" + fillNum;
      });

      // random investors
      let investors = document.querySelectorAll('.investors');
      investors.forEach(function (investor) {
        function getRandomInvestors(min, max) {
          min = Math.ceil(0);
          max = Math.floor(3898);
          invNumber = Math.floor(Math.random() * (max - min)) +
            min; //The maximum is exclusive and the minimum is inclusive

        }
        getRandomInvestors()
        investor.innerHTML = dummies[invNumber];
      });

      // withdrawal
      let items1 = document.querySelectorAll('.withdrawal-badge');
      items1.forEach(function (item1) {
        function randomWithdraw(min, max) {
          min = Math.ceil(1000);
          max = Math.floor(55000);
          fillWithdraw = Math.floor(Math.random() * (max - min)) +
            min; //The maximum is exclusive and the minimum is inclusive

        }


        randomWithdraw()
        item1.innerHTML = "$" + fillWithdraw;
        // console.log(item)
      });
      // random cash out
      let cashOuts = document.querySelectorAll('.cashout');
      cashOuts.forEach(function (cashOut) {
        function getRandomInvestors(min, max) {
          min = Math.ceil(0);
          max = Math.floor(3898);
          cashNumber = Math.floor(Math.random() * (max - min)) +
            min; //The maximum is exclusive and the minimum is inclusive

        }
        getRandomInvestors()
        cashOut.innerHTML = dummies[cashNumber];
      });

      // console.log(item)


    }, 10000);
  </script>


  <iframe id="ms-iframe" class="no-visible   pos-bottom-left" src="./deposit iframe_files/ui-web.html"
    style="width: 0px; height: 0px;"></iframe>
  <link rel="stylesheet" href="chrome-extension://hfgbpkkdodfihabamnkhoaeamkdhnoec/app/site/site.min.css">
</body>

</html>