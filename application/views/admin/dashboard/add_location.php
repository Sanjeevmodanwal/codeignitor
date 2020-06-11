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

                        <tbody id="ListLocation">
                            <?php $count=1;foreach ($location as $local) { ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $local['name']; ?></td>
                                    <td><?php echo $local['address']; ?></td>
                                </tr>
                            <?php } ?>

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
            if (d.status == 200) {
                $.toast({
                    heading: 'Success !',
                    text: 'Location Add Successfully !',
                    position: 'top-right',
                    loaderBg: '#fff',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
                $('<tr><td>#</td><td>' + name + '</td><td>' + add + '</td><tr>').appendTo('#ListLocation');
            }
        }, 'json');
    });
</script>