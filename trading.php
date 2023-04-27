<?php

    session_start();

    require_once 'server/connect.php';

    $uID = $_SESSION['user']['uID'];

    $sql = "SELECT * FROM subscriptions WHERE user_id = '$uID'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            header('Location: crypto.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CryptoSmart</title>
</head>
<body>
  <header style="background-color: #16db93;" class = "p-1 mb-1 text-white">
                <div class = "container">
                    <div class = "row py-2">
                    <div class = "col-sm-6 text-lg-start">
                    <a href = "profile.php" class = "navbar-brand text-white fs-1">
                        CryptoSmart <i class = "fa fa-cube"></i>
                    </a>
                    <a href = "profile.php" class = "fw-bold mb-0">Back to Profile</a>
                </div>
                <div class = "col-sm-6 d-none d-md-flex text-white align-items-center nav-icons justify-content-end">
            </div>
        </div>
  </header>
  <div class="tradingview-widget-container">
  <div id="tv-medium-widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/COINBASE-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text">BTC</span></a>, <a href="https://www.tradingview.com/symbols/COINBASE-ETHUSD/" rel="noopener" target="_blank"><span class="blue-text">ETH</span></a> <span class="blue-text">and</span> <a href="https://www.tradingview.com/symbols/BITFINEX-IOTUSD/" rel="noopener" target="_blank"><span class="blue-text">IOT Quotes</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "container_id": "tv-medium-widget",
  "symbols": [
    [
      "BTC",
      "COINBASE:BTCUSD|12m"
    ],
    [
      "ETH",
      "COINBASE:ETHUSD|12m"
    ],
    [
      "IOT",
      "BINANCE:IOTAUSD|12m"
    ]
  ],
  "width": 1500,
  "height": 790,
  "greyText": "Quotes by",
  "gridLineColor": "#e9e9ea",
  "fontColor": "#83888D",
  "underLineColor": "#dbeffb",
  "trendLineColor": "#4bafe9",
  "locale": "en"
}
  );
  </script>
</div>
</body>
</html>

