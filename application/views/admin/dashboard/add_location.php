<section class="main-content container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">Add Location</div>
                <div class="card-block">
                    <form role="form">
                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" placeholder="Name" class="form-control" id="name">
                        </div>
                        <div class="form-group ">
                            <label>Address</label>
                            <input type="text" placeholder="Address" class="form-control" id="address">
                        </div>

                        <button type="button" class="btn btn-sm btn-primary AddLocation">Add Location</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">
                    Location
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
                                <?php foreach ($location as $local) { ?>
                                    <td>1</td>
                                    <td><?php echo $local['name']; ?></td>
                                    <td><?php echo $local['address']; ?></td>
                                <?php } ?>
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
        var add = $('#address').val();
        $.post("<?php echo base_url('admin/dashboard/add_location'); ?>", {"name": name, "address": add}, function (d) {
            console.log(d);
        });
    });
</script>