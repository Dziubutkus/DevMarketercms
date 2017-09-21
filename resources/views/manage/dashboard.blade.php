@extends('layouts.manage')

@section('content')

    <div class="column is-10 admin-panel">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Admin Dashboard
                    </h1>
                    <h2 class="subtitle">
                        A simple admin template
                    </h2>
                </div>
            </div>
        </section>

        <nav class="level is-mobile">
            <div class="level-item has-text-centered">
                <div>
                <p class="heading">Tweets</p>
                <p class="title">3,456</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                <p class="heading">Following</p>
                <p class="title">123</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                <p class="heading">Followers</p>
                <p class="title">456K</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                <p class="heading">Likes</p>
                <p class="title">789</p>
                </div>
            </div>
        </nav>

        <section class="section">
        <div class="columns is-mobile is-multiline">
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                Total Users
              </p>
              <p class="panel-tabs">
                <a class="is-active" href="#">All Time</a>
                <a href="#">Past week</a>
                <a href="#">Past month</a>
                <a href="#">Past quarter</a>
                <a href="#">Past Year</a>
              </p>
              <div class="panel-block">
                <div id="chart1" style="height: 245px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                Sales
              </p>
              <div class="panel-block">
                <div id="chart2" style="height: 280px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>
          <div class="column is-one-third-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
                YoY Comparison
              </p>
              <div class="panel-block">
                <div id="chart3" style="height: 280px;"></div>
              </div>
              <div class="panel-block">
                <button class="button is-default is-outlined is-fullwidth">
                  View Data
                </button>
              </div>
            </section>
          </div>

          <div class="column is-half-desktop is-full-mobile">
            <section class="panel">
              <p class="panel-heading">
               Notifications
             </p>
             <div class="panel-block">
              <div class="notification is-warning is-fullwidth">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Server 101a is at 90% disk capacity.</strong>
                <br>
                <small>1h ago | via: system</small> 
              </div>
              </div>
              <div class="panel-block">
              <div class="notification is-fullwidth">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Cron job successfully completed.</strong>
                <br>
                <small>2h ago | via: system</small> 
              </div>
              </div>
              <div class="panel-block">
              <div class="notification is-fullwidth">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Completed automated backup.</strong>
                <br>
                <small>1d ago | via: system</small> 
              </div>
              </div>
              <div class="panel-block">
              <div class="notification is-fullwidth">
                <button class="delete" onclick="((this).parentNode.remove())"></button>
                <strong>Security scan complete. 0 exceptions found.</strong>
                <br>
                <small>1d ago | via: system</small> 
              </div>
              </div>
            </div>
          </section>
        </div>

    </div>
</div>
@endsection