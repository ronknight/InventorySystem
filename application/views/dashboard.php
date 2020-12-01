<section class="wrapper">

  <!--mini statistics start-->
  <div class="row" style='display: none;'>
    <div class="col-md-3">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="gauge-canvas">
              <h4 class="widget-h">Monthly Expense</h4>
              <canvas width=160 height=100 id="gauge"></canvas>
            </div>
            <ul class="gauge-meta clearfix">
              <li id="gauge-textfield" class="pull-left gauge-value"></li>
              <li class="pull-right gauge-title">Safe</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-3">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Daily Visitors</h4>
              <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">

              </div>
              <ul class="chart-meta clearfix">
                <li class="pull-left visit-chart-value">3233</li>
                <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-3">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <h4 class="widget-h">Top Advertise</h4>
            <div class="sm-pie">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-3">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <h4 class="widget-h">Daily Sales</h4>
            <div class="bar-stats">
              <ul class="progress-stat-bar clearfix">
                <li data-percent="50%"><span class="progress-stat-percent pink"></span></li>
                <li data-percent="90%"><span class="progress-stat-percent"></span></li>
                <li data-percent="70%"><span class="progress-stat-percent yellow-b"></span></li>
              </ul>
              <ul class="bar-legend">
                <li><span class="bar-legend-pointer pink"></span> New York</li>
                <li><span class="bar-legend-pointer green"></span> Los Angels</li>
                <li><span class="bar-legend-pointer yellow-b"></span> Dallas</li>
              </ul>
              <div class="daily-sales-info">
                <span class="sales-count">1200 </span> <span class="sales-label">Products Sold</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!--mini statistics end-->
  <div class="row">
    <div class="col-md-8">
      <!--earning graph start-->
      <section class="panel">
        <header class="panel-heading">
          Earning Graph <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">

          <div id="graph-area" class="main-chart">
          </div>
          <div class="region-stats">
            <div class="row">
              <div class="col-md-7">
                <div class="region-earning-stats">
                  This year total earning <span>$68,4545,454</span>
                </div>
                <ul class="clearfix location-earning-stats">
                  <li class="stat-divider">
                    <span class="first-city">$734503</span>
                    Rocky Mt,NC </li>
                  <li class="stat-divider">
                    <span class="second-city">$734503</span>
                    Dallas/FW,TX </li>
                  <li>
                    <span class="third-city">$734503</span>
                    Millville,NJ </li>
                </ul>
              </div>
              <div class="col-md-5">
                <div id="world-map" class="vector-stat">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--earning graph end-->
    </div>
    <div class="col-md-4">
      <!--widget graph start-->
      <section class="panel">
        <div class="panel-body">
          <div class="monthly-stats pink">
            <div class="clearfix">
              <h4 class="pull-left"> January 2013</h4>
              <!-- Nav tabs -->
              <div class="btn-group pull-right stat-tab">
                <a href="#line-chart" class="btn stat-btn active" data-toggle="tab"><i class="ico-stats"></i></a>
                <a href="#bar-chart" class="btn stat-btn" data-toggle="tab"><i class="ico-bars"></i></a>
              </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="line-chart">
                <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-min-spot-color="false" data-max-spot-color="false" data-line-color="#ffffff" data-spot-color="#ffffff" data-fill-color="" data-highlight-line-color="#ffffff" data-highlight-spot-color="#e1b8ff" data-spot-radius="3" data-data="[100,200,459,234,600,800,345,987,675,457,765]">
                </div>
              </div>
              <div class="tab-pane" id="bar-chart">
                <div class="sparkline" data-type="bar" data-resize="true" data-height="75" data-width="90%" data-bar-color="#d4a7f5" data-bar-width="10" data-data="[300,200,500,700,654,987,457,300,876,454,788,300,200,500,700,654,987,457,300,876,454,788]"></div>
              </div>
            </div>
          </div>
          <div class="circle-sat">
            <ul>
              <li class="left-stat-label"><span class="sell-percent">60%</span><span>Direct Sell</span></li>
              <li><span class="epie-chart" data-percent="45">
                        <span class="percent"></span>
                        </span></li>
              <li class="right-stat-label"><span class="sell-percent">40%</span><span>Channel Sell</span></li>
            </ul>
          </div>
        </div>
      </section>
      <!--widget graph end-->
      <!--widget graph start-->
      <section class="panel">
        <div class="panel-body">
          <ul class="clearfix prospective-spark-bar">
            <li class="pull-left spark-bar-label">
              <span class="bar-label-value"> $18887</span>
              <span>Prospective Label</span>
            </li>
            <li class="pull-right">
              <div class="sparkline" data-type="bar" data-resize="true" data-height="40" data-width="90%" data-bar-color="#f6b0ae" data-bar-width="5" data-data="[300,200,500,700,654,987,457,300,876,454,788,300,200,500,700,654,987,457,300,876,454,788]"></div>
            </li>
          </ul>
        </div>
      </section>
      <!--widget graph end-->
      <!--widget weather start-->
      <section class="weather-widget clearfix">
        <div class="pull-left weather-icon">
          <canvas id="icon1" width="60" height="60"></canvas>
        </div>
        <div>
          <ul class="weather-info">
            <li class="weather-city">New York <i class="ico-location"></i></li>
            <li class="weather-cent"><span>18</span></li>
            <li class="weather-status">Rainy Day</li>
          </ul>
        </div>
      </section>
      <!--widget weather end-->
    </div>
  </div>
  <!--mini statistics start-->
  <div class="row">
    <div class="col-md-3">
      <div class="mini-stat clearfix">
        <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
        <div class="mini-stat-info">
          <span>320</span>
          New Order Received
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="mini-stat clearfix">
        <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
        <div class="mini-stat-info">
          <span>22,450</span>
          Copy Sold Today
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="mini-stat clearfix">
        <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
        <div class="mini-stat-info">
          <span>34,320</span>
          Dollar Profit Today
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="mini-stat clearfix">
        <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
        <div class="mini-stat-info">
          <span>32720</span>
          Unique Visitors
        </div>
      </div>
    </div>
  </div>
  <!--mini statistics end-->


  <div class="row">
    <div class="col-md-8">
      <div class="event-calendar clearfix">
        <div class="col-lg-7 calendar-block">
          <div class="cal1 ">
          </div>
        </div>
        <div class="col-lg-5 event-list-block">
          <div class="cal-day">
            <span>Today</span>
            Friday
          </div>
          <ul class="event-list">
            <li>Lunch with jhon @ 3:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
            <li>Coffee meeting with Lisa @ 4:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
            <li>Skypee conf with patrick @ 5:45 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
            <li>Gym @ 7:00 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
            <li>Dinner with daniel @ 9:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>

          </ul>
          <input type="text" class="form-control evnt-input" placeholder="NOTES">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <!--chat start-->
      <section class="panel">
        <header class="panel-heading">
          Chat <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
          <div class="chat-conversation">
            <ul class="conversation-list">
              <li class="clearfix">
                <div class="chat-avatar">
                  <img src="images/chat-user-thumb.png" alt="male">
                  <i>10:00</i>
                </div>
                <div class="conversation-text">
                  <div class="ctext-wrap">
                    <i>John Carry</i>
                    <p>
                      Hello!
                    </p>
                  </div>
                </div>
              </li>
              <li class="clearfix odd">
                <div class="chat-avatar">
                  <img src="images/chat-user-thumb-f.png" alt="female">
                  <i>10:00</i>
                </div>
                <div class="conversation-text">
                  <div class="ctext-wrap">
                    <i>Lisa Peterson</i>
                    <p>
                      Hi, How are you? What about our next meeting?
                    </p>
                  </div>
                </div>
              </li>
              <li class="clearfix">
                <div class="chat-avatar">
                  <img src="images/chat-user-thumb.png" alt="male">
                  <i>10:00</i>
                </div>
                <div class="conversation-text">
                  <div class="ctext-wrap">
                    <i>John Carry</i>
                    <p>
                      Yeah everything is fine
                    </p>
                  </div>
                </div>
              </li>
              <li class="clearfix odd">
                <div class="chat-avatar">
                  <img src="images/chat-user-thumb-f.png" alt="female">
                  <i>10:00</i>
                </div>
                <div class="conversation-text">
                  <div class="ctext-wrap">
                    <i>Lisa Peterson</i>
                    <p>
                      Wow that's great
                    </p>
                  </div>
                </div>
              </li>
            </ul>
            <div class="row">
              <div class="col-xs-9">
                <input type="text" class="form-control chat-input" placeholder="Enter your text">
              </div>
              <div class="col-xs-3 chat-send">
                <button type="submit" class="btn btn-default">Send</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--chat end-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <section class="panel">
        <div class="wdgt-row">
          <img src="images/weather_image.jpg" height="243" alt="">
          <div class="wdt-head">
            weather forecast
          </div>
          <div class="country-select">
            <select class="styled">
              <option>New York </option>
              <option>London </option>
              <option>Australia </option>
              <option>China </option>
              <option>Canada </option>
            </select>
          </div>
        </div>

        <div class="panel-body">
          <div class="row weather-full-info">
            <div class="col-md-3 today-status">
              <h1>Today</h1>
              <i class=" ico-cloudy "></i>
              <div class="degree">37</div>
            </div>
            <div class="col-md-9">
              <ul>
                <li>
                  <h2>Tomorrow</h2>
                  <i class=" ico-cloudy text-primary"></i>
                  <div class="statistics">32</div>
                </li>
                <li>
                  <h2>Mon</h2>
                  <i class=" ico-rainy2 text-danger"></i>
                  <div class="statistics">40</div>
                </li>
                <li>
                  <h2>Tue</h2>
                  <i class=" ico-lightning3 text-info"></i>
                  <div class="statistics">25</div>
                </li>
                <li>
                  <h2>Wed</h2>
                  <i class=" ico-sun3 text-success"></i>
                  <div class="statistics">37</div>
                </li>
                <li>
                  <h2>Thu</h2>
                  <i class=" ico-snowy3 text-warning"></i>
                  <div class="statistics">15</div>
                </li>
                <li>
                  <h2>Fri</h2>
                  <i class=" ico-cloudy "></i>
                  <div class="statistics">21</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>
    </div>

    <div class="col-md-4">
      <div class="profile-nav alt">
        <section class="panel">
          <div class="user-heading alt clock-row terques-bg">
            <h1>December 14</h1>
            <p class="text-left">2014, Friday</p>
            <p class="text-left">7:53 PM</p>
          </div>
          <ul id="clock">
            <li id="sec"></li>
            <li id="hour"></li>
            <li id="min"></li>
          </ul>

          <ul class="clock-category">
            <li>
              <a href="#" class="active">
                <i class="ico-clock2"></i>
                <span>Clock</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ico-alarm2 "></i>
                <span>Alarm</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ico-stopwatch"></i>
                <span>Stop watch</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class=" ico-clock2 "></i>
                <span>Timer</span>
              </a>
            </li>
          </ul>

        </section>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!--notification start-->
      <section class="panel">
        <header class="panel-heading">
          Notification <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
          <div class="alert alert-info clearfix">
            <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
            <div class="notification-info">
              <ul class="clearfix notification-meta">
                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                <li class="pull-right notification-time">1 min ago</li>
              </ul>
              <p>
                Urgent meeting for next proposal
              </p>
            </div>
          </div>
          <div class="alert alert-danger">
            <span class="alert-icon"><i class="fa fa-facebook"></i></span>
            <div class="notification-info">
              <ul class="clearfix notification-meta">
                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                <li class="pull-right notification-time">7 Hours Ago</li>
              </ul>
              <p>
                Very cool photo jack
              </p>
            </div>
          </div>
          <div class="alert alert-success ">
            <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
            <div class="notification-info">
              <ul class="clearfix notification-meta">
                <li class="pull-left notification-sender">You have 5 message unread</li>
                <li class="pull-right notification-time">1 min ago</li>
              </ul>
              <p>
                <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
              </p>
            </div>
          </div>
          <div class="alert alert-warning ">
            <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
            <div class="notification-info">
              <ul class="clearfix notification-meta">
                <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                <li class="pull-right notification-time">5 Days Ago</li>
              </ul>
              <p>
                Next 5 July Thursday is the last day
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--notification end-->
    </div>
    <div class="col-md-6">
      <!--todolist start-->
      <section class="panel">
        <header class="panel-heading">
          To Do List <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
          <ul class="to-do-list" id="sortable-todo">
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check"/>
                <label for="todo-check"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check1"/>
                <label for="todo-check1"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check2"/>
                <label for="todo-check2"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check3"/>
                <label for="todo-check3"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check4" />
                <label for="todo-check4"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check5"/>
                <label for="todo-check5"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
            <li class="clearfix">
                    <span class="drag-marker">
                    <i></i>
                    </span>
              <div class="todo-check pull-left">
                <input type="checkbox" value="None" id="todo-check6" />
                <label for="todo-check6"></label>
              </div>
              <p class="todo-title">
                Donec quam libero, rutrum non gravida ut
              </p>
              <div class="todo-actionlist pull-right clearfix">
                <a href="#" class="todo-done"><i class="fa fa-check"></i></a>
                <a href="#" class="todo-edit"><i class="ico-pencil"></i></a>
                <a href="#" class="todo-remove"><i class="ico-close"></i></a>
              </div>
            </li>
          </ul>
          <div class="todo-action-bar">
            <div class="row">
              <div class="col-xs-4 btn-todo-select">
                <button type="submit" class="btn btn-default"><i class="fa fa-check"></i> Select All</button>
              </div>
              <div class="col-xs-4 todo-search-wrap">
                <input type="text" class="form-control search todo-search pull-right" placeholder=" Search">
              </div>
              <div class="col-xs-4 btn-add-task">
                <button type="submit" class="btn btn-default btn-primary"><i class="fa fa-plus"></i> Add Task</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--todolist end-->
    </div>
  </div>
</section>
</section>
<!--main content end-->
