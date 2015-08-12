<div class="box box-footer">
    <div class="row">
        <div class="col-lg-12" ng-if="allowInputDetail">
            <div class="row">
                <div class="col-xs-10">
                    Product :
                    <input type="text" class="form-control" ng-model="selectedProduct" id="product"
                           input-product="addItem"
                           typeahead="product as product.name for product in products.asArray() | filter:$viewValue | limitTo:8"
                           typeahead-on-select="selectProduct($item)"
                           >
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <table class="tabular table-striped col-lg-12">
                <thead style="background-color: #9d9d9d;">
                    <tr><th class="col-lg-4">Product</th>
                        <th class="col-lg-2">Avaliable</th>
                        <th class="col-lg-1">Qty</th>
                        <th class="col-lg-2">Uom</th>

                        <th class="col-lg-1" ng-if="freeInputDetail">&nbsp;</th>
                    </tr>
                </thead>
                <tbody id="item-grid">
                    <tr ng-repeat="(idx,item) in model.items" data-key="{{idx}}" chg-fokus="itemActive">
                        <td >{{item.product.name}}</td>
                        <td >{{item.avaliable}}</td>
                        <td ><input ng-model="item.qty" class="form-control" data-field="qty"></td>
                        <td >{{item.uom.name}}</td>
                            
                        <td style="text-align: center;" ng-if="freeInputDetail"><a href="javascript:;" ng-click="deleteRow(idx)"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>