<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="css/all.css">
<style>
</style>
</head>
<body>
    <header class="container" style="color: #000000;">
        <h1><b><i class="fa fa-dashboard"></i> My Dashboard</b></h1>
    </header>
    <div class="row row1">
        <div class="column" style="background-color:#f44336;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-users xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>150</h3>
                </div>
                <div class="clear"></div>
                <h4>Customers</h4>
            </div>
        </div>
        <div class="column" style="background-color:#8a2be2;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-home xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>120</h3>
                </div>
                <div class="clear"></div>
                <h4>Houses</h4>
            </div>
        </div>
        <div class="column" style="background-color:#de3163;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-building xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>5</h3>
                </div>
                <div class="clear"></div>
                <h4>Agencies</h4>
            </div>
        </div>
        <div class="column" style="background-color:#6495ed;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-handshake xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>76</h3>
                </div>
                <div class="clear"></div>
                <h4>Sales</h4>
            </div>
        </div>
        <div class="column" style="background-color:#4CAF50;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-dollar-sign xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>$1,204</h3>
                </div>
                <div class="clear"></div>
                <h4>Today's Sales</h4>
            </div>
        </div>
        <div class="column" style="background-color:#2196F3;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-hand-holding-usd xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>$5,678</h3>
                </div>
                <div class="clear"></div>
                <h4>This Week's Sales</h4>
            </div>
        </div>
        <div class="column" style="background-color:#FFC107;">
            <div class="container">
                <div class="stat-icon"><i class="fa fa-chart-line xxxlarge"></i></div>
                <div class="stat-number">
                    <h3>$23,456</h3>
                </div>
                <div class="clear"></div>
                <h4>This Month's Sales</h4>
            </div>
        </div>
    </div>
<h2 id="recent-section"><i class="fa fa-chart-line"></i> Recent Sales</h2>
<div class="row row2">
  <table class="sales-table">
    <thead>
      <tr>
        <th>Date</th>
        <th>House</th>
        <th>Customer</th>
        <th>Amount Paid</th>
        <th>Payment Type</th>
        <th>Status</th> <!-- New column for Status -->
        <th>Agent</th> <!-- New column for Agent -->
        <!-- Add more headers if needed -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2024-04-22</td>
        <td>Seaside Villa</td>
        <td>Jane Smith</td>
        <td>$750,000</td>
        <td>Cash</td>
        <td>Closed</td> <!-- New data for Status -->
        <td>Agent A</td> <!-- New data for Agent -->
      </tr>
      <!-- Add more rows with sales data -->
    </tbody>
  </table>
</div>
<!-- Customer Feedback Section -->
<h2 id="feedback-section"><i class="fa fa-comments"></i> Customer Feedback</h2>
<div class="row row3">
  <div class="feedback-display">
    <!-- Feedback Item -->
    <div class="feedback-item">
      <p class="feedback-date">2024-04-22</p>
      <p class="feedback-text">"I had a great experience with the service. Highly recommend!"</p>
      <p class="feedback-customer">- Jane Smith</p>
    </div>
    <div class="feedback-item">
      <p class="feedback-date">2024-04-22</p>
      <p class="feedback-text">"I had a great experience with the service. Highly recommend!"</p>
      <p class="feedback-customer">- Jane Smith</p>
    </div>
    <div class="feedback-item">
      <p class="feedback-date">2024-04-22</p>
      <p class="feedback-text">"I had a great experience with the service. Highly recommend!"</p>
      <p class="feedback-customer">- Jane Smith</p>
    </div>
    <!-- More feedback items -->
  </div>
</div>


</body>
</html>
