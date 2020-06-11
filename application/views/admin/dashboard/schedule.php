<section class="main-content container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">Schedule</div>
                <div class="card-block">
                    <form role="form">
                        <div class="form-group">
                            <label>Select Location</label>
                            <select name="account" class="form-control m-b">
                                <?php foreach($Location as $local) { ?>
                                <option value="<?php echo $local['id'];?>"><?php echo $local['name'];?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select Class</label>
                            <select name="account" class="form-control m-b">
                               <?php foreach($class as $cls) { ?>
                                <option value="<?php echo $cls['id'];?>"><?php echo $cls['name'];?></option>
                                <?php } ?>>
                              
                            </select>
                        </div>

                        <div class="form-group ">
                            <label>Duration</label>
                            <input type="text" placeholder="Duration" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label>Select</label>
                            <select name="account" class="form-control m-b">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-sm btn-primary AddLocation">Add Location</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">
                    Schedule
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                               
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

<script>
    $('.AddLocation').on("click", function () {
        var name = $('#name').val();
        $.post("<?php echo base_url('admin/dashboard/add_class'); ?>", {"name": name}, function (d) {
            console.log(d);
        });
    });
</script>