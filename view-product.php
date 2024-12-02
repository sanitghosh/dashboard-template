<?php include_once("header.php"); ?>

<!-- Main content / Dynanmic  -->
<section class="main_content_area padLeftRight">
    <div class="top_title row justify-content-between align-items-center">
        <div class="col-md-5">
            <h2>Products</h2>
        </div>
        <div class="col-md-5 text-end ">

        </div>
    </div>

    <div class="pt-3 bg-white  rounded-1">
        <div class="highlight_title">
            <h4>Product 1</h4>
        </div>
        <div class="p-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://marketplace.canva.com/EAFy-0Fi_GI/1/0/1600w/canva-pink-and-white-gradient-aesthetic-bodycare-new-product-amazon-product-image-gmLqsMikDLM.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">

                    <form class="containerPadding">
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Selling price </label>
                                <p>100</p>
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label ">
                                <label for="">Service fees</label>

                                <div class="input-group w-100">
                                    <div class="input-group-text">
                                        <span class="mx-auto">USD</span>
                                    </div>
                                    <input type="text" class="form-control w-100" placeholder="Price" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">No. of participate </label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-item mb-4">
                            <div class="lft-label d-flex">
                                <label for="">Delivery Options</label>

                                <div>
                                    <div class="d-flex align-items-center  mb-2">
                                        <input id="pickup" type="checkbox">
                                        <label for="pickup" class="mb-0">Pick-up</label>
                                    </div>
                                    <div class="d-flex align-items-center mb-4 ">
                                        <input id="homedelivery" type="checkbox">
                                        <label for="homedelivery" class="mb-0">Home delivery</label>
                                    </div>
                                    <div class="">
                                        <label class="fw-bold">Delivery Charge</label>
                                        <div class="delivery-charge d-flex align-items-center mb-2">
                                            <label class="mb-0">Fixed price</label>
                                            <div class="input-group w-100">
                                                <div class="input-group-text">
                                                    <span class="mx-auto">USD</span>
                                                </div>
                                                <input type="text" class="form-control w-100" placeholder="Price" value="">
                                            </div>
                                        </div>
                                        <div class="delivery-charge d-flex align-items-center">
                                            <label class="mb-0">Per Km price</label>
                                            <div class="input-group w-100">
                                    <div class="input-group-text">
                                        <span class="mx-auto">USD</span>
                                    </div>
                                    <input type="text" class="form-control w-100" placeholder="Price" value="">
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="submit mt-5 text-center">
                            <button type="button" class="btn btn-primary border-0">Approve</button>
                            <button type="button" class="btn btn-outline-danger border-0" data-bs-target="#rejectItems" data-bs-toggle="modal">Reject</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>



</div>
</div>

</main>
<div class="modal fade modal-table" id="rejectItems" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rejectItemsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0 px-0">
                <div class="highlight_title d-flex align-items-center w-100">
                    <h4>Ask for a reason</h4>
                    <div class="clseBtn ms-auto">
                        <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                    </div>
                </div>

            </div>


            <div class="modal-body border-0">

                <form class="form">
                    <div class="form-item">
                        <Label>Message</Label>
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="submit mt-4">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>