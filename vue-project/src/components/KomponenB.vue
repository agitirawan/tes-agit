<template>

    <div>
        <table class="table">
            <tbody>
                <tr>
                    <th rowspan="4" style="vertical-align: text-top"><i class="bi bi-truck"></i> Logistic Instruction
                    </th>
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

        <h6 style="text-align: left;padding-left: 7px;font-size: 20px;color: darkturquoise">Cost Detail</h6>

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
                    <td>
                        <select name="" class="form-select" id="">
                            <option value="">row</option>
                        </select>
                    </td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Select an Option</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></td>
                        <td>
                            <a href="" class="btn btn-secondary" style="background-color: lightgray"><i
                                    class="bi bi-dash-lg"></i></a>
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
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Select an Option</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></td>
                    <td>
                        <a href="" class="btn btn-secondary" style="background-color: lightgray"><i
                                class="bi bi-dash-lg"></i></a>
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
                        <a href="" class="btn btn-secondary" style="background-color: lightseagreen"><i
                                class="bi bi-plus-lg"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</template>


<script>
    export default {
        name: 'KomponenB',
        props: {
            msg: String
        },
        
    }
</script>