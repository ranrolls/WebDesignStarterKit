<button type="button" id="domain-mail-contact-anchor" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#domain-mail-form">
    Contact Us
</button>
<button type="button" id="client-mail-contact-anchor" class="btn btn-primary btn-lg hidden" data-toggle="modal" data-target="#client-mail-form">
    client-mail-form
</button>
<div class="domain-mail-form modal fade" id="domain-mail-form" tabindex="-1" role="dialog" aria-labelledby="domain-mail-contact" aria-hidden="true">
    <form class="container-fluid modal-dialog modal-vertical-centered" enctype="text/plain" action="#">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h3 class="panel-title">Tell us your Buy Requirement</h3>
            </div>
            <div class="modal-body panel-body container-fluid">
                <div class="form-group">
                    <label class="sr-only">Product Name</label>
                    <input type="text" class="form-control" name="product-name" placeholder="Enter product name here" />
                </div>
                <div class="form-group">
                    <label class="sr-only">Desciption</label>
                    <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-lg-3">
                        <label class="sr-only">Estimated Qty.</label>
                        <input type="text" class="form-control" name="qty" placeholder="Estimated Qty." />
                    </div>
                    <div class="form-group col-lg-3">
                        <label class="sr-only">Select Unit</label>
                        <select class="form-control" name="unit">
                            <option value="">--Select Unit--</option>
                            <option value="Pieces">Pieces</option>
                            <option value="Tons">Tons</option>
                            <option value="Units">Units</option>
                            <option value="Kilogram">Kilogram</option>
                            <option value="Sets">Sets</option>
                            <option value="Meter">Meter</option>
                            <option value="Boxes">Boxes</option>
                            <option value="Metric Tons">Metric Tons</option>
                            <option value="Square Feet">Square Feet</option>
                            <option value="Pairs">Pairs</option>
                            <option value="Bags">Bags</option>
                            <option value="Rolls">Rolls</option>
                            <option value="Bottles">Bottles</option>
                            <option value="Litres">Litres</option>
                            <option value="Packets">Packets</option>
                            <option value="Sheets">Sheets</option>
                            <option value="Foot">Foot</option>
                            <option value="Dozens">Dozens</option>
                            <option value="Cartons">Cartons</option>
                            <option value="Packs">Packs</option>
                            <option value="Reams">Reams</option>
                            <option value="Grams">Grams</option>
                            <option value="Ounce">Ounce</option>
                            <option value="Pound">Pound</option>
                            <option value="20' Container">20' Container</option>
                            <option value="40' Container">40' Container</option>
                            <option value="Gallon">Gallon</option>
                            <option value="Barrel">Barrel</option>
                            <option value="Bushel">Bushel</option>
                            <option value="Kilometer">Kilometer</option>
                            <option value="Square Meters">Square Meters</option>
                            <option value="Other">Other</option>
                            <option value="Hectare">Hectare</option>
                            <option value="Short Ton">Short Ton</option>
                            <option value="Long Ton">Long Ton</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="sr-only">Other Unit</label>
                        <input type="text" class="form-control" name="ounit" placeholder="Any other unit" />
                    </div>
                </div>
                <p>Your Contact Details</p>
                <div class="form-group row">
                    <label class="col-lg-3">Email:</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="email" type="email" placeholder="Email - Id" required="true" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3">Contact Name:</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="name" type="text" placeholder="Full Name" required="true" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3">Company Name:</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="cname" type="text" placeholder="Company Name ( optional )" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3">Country / City</label>
                    <div class="col-lg-4">
                        <input class="form-control" name="country" type="text" placeholder="India" value="India" />
                    </div>
                    <div class="col-lg-5">    
                        <input class="form-control" name="city" type="text" placeholder="City" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3">Mobile / Cell Number</label>
                    <div class="col-lg-3">
                        <input class="form-control" name="area-code" type="text" placeholder="+91" value="" />
                    </div>
                    <div class="col-lg-6">    
                        <input class="form-control" name="mobile" type="text" placeholder="Mobile / Cell Number" />
                    </div>
                </div>
                <!--                <div class="form-group row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <button class="btn btn-primary btn-block" type="submit" value="Send Your Requirement">Send Your Requirement</button>
                                    </div>
                                </div>-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" type="submit">Send Your Requirement</button>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="client-mail-form" tabindex="-1" role="dialog" aria-labelledby="client-mail-form" aria-hidden="true">
    <form class="container-fluid modal-dialog modal-vertical-centered" enctype="text/plain" action="#">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h3 class="panel-title">Tell us your Buy Requirement</h3>
            </div>
            <div class="modal-body panel-body container-fluid">
                <div class="form-group">
                    <label class="sr-only">Product Name</label>
                    <input type="hidden" value="product-name" id="product-name-form" class="form-control" name="product-name" placeholder="Enter product name here" />
                </div>
                <div class="form-group">
                    <label class="sr-only">Company Name</label>
                    <input type="hidden" value="company-name" id="company-name-form" class="form-control" name="company-name" placeholder="Enter product name here" />
                </div>
                <div class="form-group">
                    <label class="sr-only">Desciption</label>
                    <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <p>Your Contact Details</p>
                <div class="form-group row">
                    <label class="col-lg-3">Email:</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="email" type="email" placeholder="Email - Id" required="true" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3">Contact Name:</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="name" type="text" placeholder="Full Name" required="true" />
                    </div>
                </div>
                <!--                <div class="form-group row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <button class="btn btn-primary btn-block" type="submit" value="Send Your Requirement">Send Your Requirement</button>
                                    </div>
                                </div>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" type="submit">Send Your Requirement</button>
            </div>
        </div>
    </form>
</div>



                <!-- 	<script src="http://code.jquery.com/jquery-[version].min.js"></script>
                <script src="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.js"></script>		-->

<script src="_/js/vendor/jquery-1.9.1.min.js"></script>
<!--	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	-->
<script>window.jQuery || document.write('<script src="_/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="_/js/vendor/jquery.mobile-1.4.0.min.js"></script>

<link href="_/css/carousel.css" rel="stylesheet">
<script src="_/js/vendor/bootstrap.min.js"></script>
<script src="_/js/vendor/carousel.js"></script>

<link rel="stylesheet/less" href="_/css/cs.less" type="text/css"><!-- your custom lesss css here -->
<script src="_/js/vendor/less.js"></script>
<link rel="stylesheet" href="_/css/cs.css"><!-- your custom css here -->

<script src="_/js/plugins.js"></script><!-- plugin.js is your custom js use anyway you like in jQ  -->
<script src="_/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));

</script>