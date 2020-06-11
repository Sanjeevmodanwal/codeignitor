<section class="main-content container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">Add Class</div>
                <div class="card-block">
                    <form role="form">
                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" placeholder="Name" class="form-control" id="name">
                        </div>
                        <!--                        <div class="form-group ">
                                                    <label>Address</label>
                                                    <input type="text" placeholder="Address" class="form-control" id="address">
                                                </div>-->

                        <button type="button" class="btn btn-sm btn-primary AddLocation">Add Class</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">
                    Class
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="ClassList">
                            <?php $count=1; foreach ($class as $cal) { ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $cal['class_name']; ?></td>
                                    <td><?php echo $cal['date']; ?></td>
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
        $.post("<?php echo base_url('admin/dashboard/add_class'); ?>", {"name": name}, function (d) {
            if (d.status == 200) {
                $.toast({
                    heading: 'Success !',
                    text: 'Class Add Successfully !',
                    position: 'top-right',
                    loaderBg: '#fff',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
                $('<tr><td>#</td><td>' + name + '</td><td>' + d.date + '</td><tr>').appendTo('#ClassList');
            } else {

            }
        }, 'json');
    });
</script>