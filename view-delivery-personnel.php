<?php include_once("header.php"); ?>

<!-- Main content / Dynanmic  -->
<section class="main_content_area padLeftRight">
    <div class="top_title row justify-content-between align-items-center">
        <div class="col-md-5">
            <h2>Counseling Personnel</h2>
        </div>

    </div>
    <div class="pt-3 bg-white  rounded-1">
        <div class="highlight_title">
            <!-- <h4>Product 1</h4> -->
            <a href="">Home / Delivery</a>
        </div>
        <div class="p-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex gap-4">
                        <div>
                            <img src="https://marketplace.canva.com/EAFy-0Fi_GI/1/0/1600w/canva-pink-and-white-gradient-aesthetic-bodycare-new-product-amazon-product-image-gmLqsMikDLM.jpg" class="img-fluid" alt="">
                        </div>
                        <div>
                            <img src="https://marketplace.canva.com/EAFy-0Fi_GI/1/0/1600w/canva-pink-and-white-gradient-aesthetic-bodycare-new-product-amazon-product-image-gmLqsMikDLM.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <form class="containerPadding">
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Name </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Email </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">City </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Country </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Street Address </label>
                                <textarea></textarea>
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Zip code </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-item">
                            <div class="d-flex lft-label">
                                <label for="">Phone No </label>
                                <input type="text" class="form-control">
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
                        <Label>Reason:</Label>
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="submit mt-4">
                        <button type="button" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-outline-primary">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>