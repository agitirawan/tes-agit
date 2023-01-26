<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <!-- Content here -->
        
        {{-- Header --}}
        <div class="jumbotron">

            <h1>Test UI Vue.js</h1>
            Oleh : Agit Ari Irawan

            <hr>
        </div>

        <div class="card card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th rowspan="4" style="vertical-align: text-top"<i class="bi bi-truck"></i> Logistic Instruction</th>
                        <th>Draft</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                  <tr>
                    <td>Assigned Vendor</td>
                    <td>Attention Of</td>
                    <td>Quotation No</td>
                    <td>Invoice To</td>
                    <td>Customer Contract</td>
                  </tr>
                  <tr>
                    <td>Amarit</td>
                    <td>john</td>
                    <td>ABC</td>
                    <td>Mito</td>
                    <td>ANOC</td>
                  </tr>
                  <tr>
                    <td>Vendor Address</td>
                    <td>Marubeni-ItoChu</td>
                    <td></td>
                    <td></td>
                    <td>AI</td>
                  </tr>
                </tbody>
            </table>

            <h6 style="padding-left: 7px;font-size: 20px;color: darkturquoise">Cost Detail</h6>

            <table class="table">
              <thead>
                <tr>
                  <th>Description</th>
                  <th>Qty</th>
                  <th>UOM</th>
                  <th>Unit Price</th>
                  <th>Discount (%)</th>
                  <th>VAT (%)</th>
                  <th>Currency</th>
                  <th>Vat Amount</th>
                  <th>Sub Total</th>
                  <th>Total</th>
                  <th>Charge To</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Description</td>
                  <td>Qty</td>
                  <td>SHP</td>
                  <td>Unit Price</td>
                  <td>0</td>
                  <td>0</td>
                  <td>USD</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>Select an Option</td>
                  <td>
                      <a href="" class="btn btn-secondary" style="background-color: lightgray"><i class="bi bi-dash-lg"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td>Qty</td>
                  <td>SHP</td> 
                  <td>Unit Price</td>
                  <td>0</td>
                  <td>0</td>
                  <td>AED</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>Select an Option</td>
                  <td>
                      <a href="" class="btn btn-secondary" style="background-color: lightgray"><i class="bi bi-dash-lg"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Exchange Rate 1 USD = 3.6725</td>
                  <td colspan="5">AED</td>
                  <td>AED in Total</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td>0.00</td>
                  <td></td>
                  <td>
                      <a href="" class="btn btn-secondary" style="background-color: lightseagreen"><i class="bi bi-plus-lg"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
    

            <div class="" style="text-align: right">
            {{-- Button --}}
            <a href="" class="btn">Cancel</a>
            <a href="" class="btn btn-default">Save as Draft</a>
            <a href="" class="btn btn-primary">Submit</a>
        </div>
        </div>





    </div>