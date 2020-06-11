<section class="main-content container">
    
    <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
 
    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-heading card-default">Schedule</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('/admin/dashboard/add_schedule'); ?>">
                        <div class="form-group">
                            <label>Select Location</label>
                            <select name="location" class="form-control m-b location">
                                <?php foreach ($Location as $local) { ?>
                                    <option value="<?php echo $local['id']; ?>"><?php echo $local['location_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select Class</label>
                            <select name="class" class="form-control m-b">
                                <?php foreach ($class as $cls) { ?>
                                    <option value="<?php echo $cls['id']; ?>"><?php echo $cls['class_name']; ?></option>
                                <?php } ?>>
                            </select>
                        </div>

                        <div class="form-group ">
                            <label>Duration</label>
                            <input type="text" placeholder="Duration" class="form-control" name="duration">
                        </div>
                        <div class="form-group">
                            <label>Select Day</label>
                            <select name="day" class="form-control m-b">
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Thusday</option>
                                <option value="Wednessday">WednessDay</option>
                                <option value="Friday">Friday</option>
                                <option value="Saterday">Satarday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Add Location</button>
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
                                <th>Location</th>
                                <th>Class</th>
                                <th>Duration</th>
                                <th>Day</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php $count = 1;
                            foreach ($schedules as $sec) { ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $sec['location_name']; ?></td>
                                    <td><?php echo $sec['class_name']; ?></td>
                                    <td><?php echo $sec['duration']; ?></td>
                                    <td><?php echo $sec['day']; ?></td>
                                </tr>
<?php } ?>

                        </tbody>
                    </table>
                </div>
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