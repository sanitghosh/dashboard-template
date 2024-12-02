<?php include_once ("header.php"); ?>

<!-- Main content / Dynanmic  -->
<section class="main_content_area padLeftRight">
    <div class="top_title row justify-content-between align-items-center">
        <div class="col-md-5">
            <h2>General Settings</h2>
        </div>

    </div>

    <div class="bg-white  rounded-1">

        <form class="containerPadding">
            <div class="row mb-3">
                <div class="col-md-6">

                    <div class="form-item">
                        <label>Site Title</label>
                        <input class="form-control" type="text" placeholder="Pathway USA">
                    </div>
                    <div class="form-item">
                        <label>Front-end record per page</label>
                        <input class="form-control" type="text" placeholder="8">
                    </div>
                    <div class="form-item">
                        <label>Admin record per page</label>
                        <input class="form-control" type="text" placeholder="50">
                    </div>
                    <div class="form-item date-format">
                        <label>Date Format</label>
                        <select>
                            <option value="1">4th May, 2024</option>
                            <option value="2">14th May, 2025</option>
                            <option value="3">24th May, 2026</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label>Admin Email</label>
                        <input type="email" placeholder="hello@pathwayusa.org">
                    </div>
                    <div class="form-item">
                        <label>Address</label>
                        <input type="text" placeholder="07-01, 205 Henderson Road  Henderson Industrial Park  ">
                    </div>
                    <div class="form-item">
                        <label>Phone Number</label>
                        <input type="text" placeholder="63344022" maxlength="12">
                    </div>
                    <div class="form-item">
                        <label>Admin stripe public key</label>
                        <input type="text" placeholder="pk_live_51Hsmp3GWOcG5P0WTGUybgb4NAcNOuEJMllBhT">
                    </div>
                    <div class="form-item">
                        <label>Admin stripe secret key</label>
                        <input type="text" placeholder="pk_live_51Hsmp3GWOcG5P0WTGUybgb4NAcNOuEJMllBhT">
                    </div>



                </div>
                <div class="col-md-6">

                    <div class="form-item">
                        <label>Global Meta Title</label>
                        <input type="text" class="form-control" placeholder="Church Database">
                    </div>
                    <div class="form-item">
                        <label>Global Meta Description</label>
                        <textarea style="height: 126px;"></textarea>
                    </div>
                    <div class="form-item">
                        <label>Youtube Link</label>
                        <input type="text" placeholder="https://www.youtube.com/user/pathwayusa">
                    </div>
                    <div class="form-item">
                        <label>Twitter Link</label>
                        <input type="text" placeholder="https://www.twitter.com/pathwayusa">
                    </div>
                    <div class="form-item">
                        <label>Facebook link</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-item">
                        <label>Instagram link</label>
                        <input type="text" placeholder="https://www.instagram.com/tabjoyantioch/?hl=en">
                    </div>
                    <div class="form-item">
                        <label>Copyrighttext</label>
                        <input type="text" placeholder="© Copyright 2005-2023, All Rights Reserved">
                    </div>
                    <div class="form-item">
                        <label>Stripe transaction fees</label>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="form-item ">
                <label>Predefined Donation Amounts (3 Choices)</label>
                <div class="row gy-3 gy-md-0">
                    <div class="col-md-4">                        
                        <input type="text" placeholder="Amount 1">
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Amount 2">
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder="Amount 3">
                    </div>
                </div>
            </div>
            <div class="submit">
                <button type="button" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

</section>



</div>
</div>

</main>


<?php include_once ("footer.php"); ?>