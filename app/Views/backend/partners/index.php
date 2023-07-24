<?= $this->extend('backend/layouts/overview') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      <h3><strong>Dashboard</strong></h3>
    </div>

    <div class="col-auto ms-auto text-end mt-n1">
      <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
      <a href="#" class="btn btn-primary">New Project</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Total balance</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="">
                <i class="fa-solid fa-dollar-sign align-middle"></i>
              </div>
            </div>
          </div>
          <h4 class="mt-0 mb-1">$53,252 <span class="text-muted">2.30 BTC</span></h4>

          <div class="mb-0">
            <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> +6.15% </span>
            <span class="text-muted">Since last week</span>
          </div>

        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">USD/BTC</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #F7931A; color: white;">
                <i class="fa-solid fa-bitcoin-sign align-middle"></i>
              </div>
            </div>
          </div>
          <h4 class="mt-0 mb-1">$23.077,05 <span class="text-muted">€22.617,47</span></h4>

          <div class="mb-0">
            <span class="text-muted">Volume: 132,691 BTC</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">LTC/BTC</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #345D9D; color: white;">
                <i class="fa-solid fa-litecoin-sign align-middle"></i>
              </div>
            </div>
          </div>
          <h4 class="mt-0 mb-1">0.00256 <span class="text-muted">$59.02</span></h4>

          <div class="mb-0">
            <span class="text-muted">Volume: 31,268 BTC</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">ETH/BTC</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #627EEA; color: white;">
                <i class="fa-brands fa-ethereum align-middle"></i>
              </div>
            </div>
          </div>
          <h4 class="mt-0 mb-1">0.07334 <span class="text-muted">$1,691.76</span></h4>

          <div class="mb-0">
            <span class="text-muted">Volume: 32,982 BTC</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex d-none d-xxl-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">XMR/BTC</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #FF6600; color: white;">
                <i class="fa-brands fa-monero align-middle"></i>
              </div>
            </div>
          </div>
          <h4 class="mt-0 mb-1">0.006854 <span class="text-muted">$157.68</span></h4>

          <div class="mb-0">
            <span class="text-muted">Volume: 28,567 BTC</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-7 col-xxl-8 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <input type="radio" class="btn-check" name="btnradio" id="1m" autocomplete="off">
            <label class="btn btn-sm btn-light" for="1m">1m</label>

            <input type="radio" class="btn-check" name="btnradio" id="5m" autocomplete="off" checked>
            <label class="btn btn-sm btn-primary" for="5m">5m</label>

            <input type="radio" class="btn-check" name="btnradio" id="30m" autocomplete="off">
            <label class="btn btn-sm btn-light" for="30m">30m</label>

            <input type="radio" class="btn-check" name="btnradio" id="1h" autocomplete="off">
            <label class="btn btn-sm btn-light" for="1h">1h</label>

            <input type="radio" class="btn-check" name="btnradio" id="1d" autocomplete="off">
            <label class="btn btn-sm btn-light" for="1d">1d</label>
          </div>
          <h5 class="card-title mb-0">LTC/BTC</h5>
        </div>
        <div class="card-body">
          <div class="chart w-100">
            <div id="apexcharts-dashboard-candlestick"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-5 col-xxl-4 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <div class="dropdown position-relative">
              <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                <i class="align-middle" data-feather="more-horizontal"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <h5 class="card-title mb-0">Markets</h5>
        </div>
        <table class="table table-sm table-striped my-0">
          <thead>
            <tr>
              <th><i class="fas fa-star fa-sm cursor-pointer"></i></th>
              <th>Coin</th>
              <th>Price</th>
              <th class="d-none d-xl-table-cell">Volume</th>
              <th class="d-none d-xl-table-cell">Change</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="fas fa-star fa-sm cursor-pointer"></i></td>
              <td>ETH</td>
              <td class="text-end">0.02309756</td>
              <td class="d-none d-xl-table-cell text-end">427.563</td>
              <td class="d-none d-xl-table-cell text-end text-success">+1.91</td>
            </tr>
            <tr>
              <td><i class="fas fa-star fa-sm cursor-pointer"></i></td>
              <td>XRP</td>
              <td class="text-end">0.00002205</td>
              <td class="d-none d-xl-table-cell text-end">132.691</td>
              <td class="d-none d-xl-table-cell text-end text-success">+0.64</td>
            </tr>
            <tr>
              <td><i class="fas fa-star fa-sm cursor-pointer"></i></td>
              <td>ETC</td>
              <td class="text-end">0.00077779</td>
              <td class="d-none d-xl-table-cell text-end">32.982</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-6.71</td>
            </tr>
            <tr>
              <td><i class="fas fa-star fa-sm cursor-pointer"></i></td>
              <td>LTC</td>
              <td class="text-end">0.00485685</td>
              <td class="d-none d-xl-table-cell text-end">31.268</td>
              <td class="d-none d-xl-table-cell text-end text-success">+1.88</td>
            </tr>
            <tr>
              <td><i class="fas fa-star fa-sm cursor-pointer"></i></td>
              <td>XMR</td>
              <td class="text-end">0.00700518</td>
              <td class="d-none d-xl-table-cell text-end">28.567</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-1.26</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>BSC</td>
              <td class="text-end">0.02105473</td>
              <td class="d-none d-xl-table-cell text-end">25.960</td>
              <td class="d-none d-xl-table-cell text-end text-success">+0.10</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>ABC</td>
              <td class="text-end">0.02613303</td>
              <td class="d-none d-xl-table-cell text-end">21.597</td>
              <td class="d-none d-xl-table-cell text-end text-success">-3.20</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>TRX</td>
              <td class="text-end">0.00000165</td>
              <td class="d-none d-xl-table-cell text-end">14.106</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-0.61</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>SC</td>
              <td class="text-end">0.00000026</td>
              <td class="d-none d-xl-table-cell text-end">9.531</td>
              <td class="d-none d-xl-table-cell text-end text-success">+13.04</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>OMG</td>
              <td class="text-end">0.00019483</td>
              <td class="d-none d-xl-table-cell text-end">8.820</td>
              <td class="d-none d-xl-table-cell text-end text-success">+3.67</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>CHR</td>
              <td class="text-end">0.00000223</td>
              <td class="d-none d-xl-table-cell text-end">7.428</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-4.21</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>AVA</td>
              <td class="text-end">0.00003667</td>
              <td class="d-none d-xl-table-cell text-end">6.863</td>
              <td class="d-none d-xl-table-cell text-end text-success">+13.60</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>DASH</td>
              <td class="text-end">0.00825500</td>
              <td class="d-none d-xl-table-cell text-end">6.693</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-1.51</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>LINK</td>
              <td class="text-end">0.00043873</td>
              <td class="d-none d-xl-table-cell text-end">6.290</td>
              <td class="d-none d-xl-table-cell text-end text-success">+2.44</td>
            </tr>
            <tr>
              <td><i class="far fa-star fa-sm cursor-pointer"></i></td>
              <td>EOS</td>
              <td class="text-end">0.00028505</td>
              <td class="d-none d-xl-table-cell text-end">6.144</td>
              <td class="d-none d-xl-table-cell text-end text-danger">-1.62</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <button class="btn btn-sm btn-light">View all</button>
          </div>
          <h5 class="card-title mb-0">Sell Orders</h5>
        </div>
        <table class="table table-sm table-striped my-0">
          <thead>
            <tr>
              <th>Price</th>
              <th class="d-none d-xl-table-cell">BTC</th>
              <th>Sum(BTC)</th>
            </tr>
          </thead>
          <tbody class="text-end">
            <tr>
              <td>0.03892501</td>
              <td class="d-none d-xl-table-cell">1.24864875</td>
              <td>1.26329659</td>
            </tr>
            <tr>
              <td>0.03893754</td>
              <td class="d-none d-xl-table-cell">0.19373225</td>
              <td>1.45702884</td>
            </tr>
            <tr>
              <td>0.03895189</td>
              <td class="d-none d-xl-table-cell">0.00011222</td>
              <td>1.45714106</td>
            </tr>
            <tr>
              <td>0.03896593</td>
              <td class="d-none d-xl-table-cell">0.05366476</td>
              <td>1.51080582</td>
            </tr>
            <tr>
              <td>0.03897932</td>
              <td class="d-none d-xl-table-cell">0.30856527</td>
              <td>1.81937109</td>
            </tr>
            <tr>
              <td>0.03897933</td>
              <td class="d-none d-xl-table-cell">0.01276398</td>
              <td>1.83213507</td>
            </tr>
            <tr>
              <td>0.03899180</td>
              <td class="d-none d-xl-table-cell">0.00029556</td>
              <td>1.83243063</td>
            </tr>
            <tr>
              <td>0.03899784</td>
              <td class="d-none d-xl-table-cell">0.08005194</td>
              <td>1.91248257</td>
            </tr>
            <tr>
              <td>0.03899998</td>
              <td class="d-none d-xl-table-cell">0.10106578</td>
              <td>2.01354835</td>
            </tr>
            <tr>
              <td>0.03899999</td>
              <td class="d-none d-xl-table-cell">0.11699997</td>
              <td>2.13054832</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <button class="btn btn-sm btn-light">View all</button>
          </div>
          <h5 class="card-title mb-0">Buy Orders</h5>
        </div>
        <table class="table table-sm table-striped my-0">
          <thead>
            <tr>
              <th>Price</th>
              <th class="d-none d-xl-table-cell">BTC</th>
              <th>Sum(BTC)</th>
            </tr>
          </thead>
          <tbody class="text-end">
            <tr>
              <td>0.03892000</td>
              <td class="d-none d-xl-table-cell">0.00873616</td>
              <td>0.00873616</td>
            </tr>
            <tr>
              <td>0.03890500</td>
              <td class="d-none d-xl-table-cell">2.58305468</td>
              <td>2.59179084</td>
            </tr>
            <tr>
              <td>0.03890132</td>
              <td class="d-none d-xl-table-cell">2.19999989</td>
              <td>4.79179073</td>
            </tr>
            <tr>
              <td>0.03890053</td>
              <td class="d-none d-xl-table-cell">0.00322305</td>
              <td>4.79501378</td>
            </tr>
            <tr>
              <td>0.03889706</td>
              <td class="d-none d-xl-table-cell">0.60738409</td>
              <td>5.40239787</td>
            </tr>
            <tr>
              <td>0.03888117</td>
              <td class="d-none d-xl-table-cell">0.49926179</td>
              <td>5.90165966</td>
            </tr>
            <tr>
              <td>0.03885500</td>
              <td class="d-none d-xl-table-cell">0.03877729</td>
              <td>5.94043695</td>
            </tr>
            <tr>
              <td>0.03884325</td>
              <td class="d-none d-xl-table-cell">0.00798318</td>
              <td>5.94842013</td>
            </tr>
            <tr>
              <td>0.03883474</td>
              <td class="d-none d-xl-table-cell">0.29455407</td>
              <td>6.24297420</td>
            </tr>
            <tr>
              <td>0.03881616</td>
              <td class="d-none d-xl-table-cell">0.00970404</td>
              <td>6.25267824</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-lg-12 col-xxl-3 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <div class="card-actions float-end">
            <input type="radio" class="btn-check" name="btnradio" id="buy" autocomplete="off" checked>
            <label class="btn btn-sm btn-primary" for="buy">Buy</label>

            <input type="radio" class="btn-check" name="btnradio" id="sell" autocomplete="off">
            <label class="btn btn-sm btn-light" for="sell">Sell</label>

            <input type="radio" class="btn-check" name="btnradio" id="send" autocomplete="off">
            <label class="btn btn-sm btn-light" for="send">Send</label>
          </div>
          <h5 class="card-title mb-0">Operations</h5>
        </div>

        <div class="card-body">
          <p>Place new order:</p>

          <div class="input-group mb-3">
            <label class="input-group-text">Amount</label>
            <select class="form-select" style="max-width: 88px;">
              <option value="BTC" selected="">BTC</option>
              <option value="ETH">ETH</option>
              <option value="LTC">LTC</option>
              <option value="XMR">XMR</option>
            </select>
            <input type="text" class="form-control" value="0.25">
          </div>

          <div class="input-group mb-3">
            <label class="input-group-text">Price</label>
            <input type="text" class="form-control" readonly value="23,077.05">
            <label class="input-group-text">$</label>
          </div>

          <div class="input-group mb-3">
            <label class="input-group-text">Total</label>
            <input type="text" class="form-control" readonly value="5,769.27">
            <label class="input-group-text">$</label>
          </div>

          <div class="d-grid">
            <button type="button" class="btn btn-primary mb-3">Process to wallet</button>
          </div>

          <p class="text-muted mb-0">The final amount could change depending on current market conditions.</p>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
