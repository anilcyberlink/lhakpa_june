<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Lhakpa Trekking</title>
        <style>
            table {
                border-collapse: collapse;
                width:100%;
            }
            table, th, td {
                border: 1px solid #ddd;
                padding:8px;
            }
        </style>
    </head>
    <body style="font-family: sans-serif">
        <div style="margin:0 auto; max-width:700px; width:100%;">
            <blockquote>
                <div style="background:#FFF; padding:8px 0px; margin-bottom:5px;">
                    <img src="<?php echo e(asset('theme-assets/img/green-lhakpa.png')); ?>" style="width: 25%"/>
                </div>
            </blockquote>
            <h3>Trip Information</h3>
            <table class="">
                <tbody>
                    <tr>
                        <td class=""> Trip Name</td>
                        <td class=""><?php echo e($trip_name); ?></td>
                    </tr>
                    <?php if($request->trip_start_date): ?>
                        <tr>
                            <td class="">Trip Starts</td>
                            <td class=""><?php echo e($request->trip_start_date); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->start_date): ?>
                        <tr>
                            <td class="">Trip Starts</td>
                            <td class=""><?php echo e($request->start_date); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->trip_end_date): ?>
                        <tr>
                            <td class="">Trip Ends</td>
                            <td class=""><?php echo e($request->trip_end_date); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->end_date): ?>
                        <tr>
                            <td class="">Trip Ends</td>
                            <td class=""><?php echo e($request->end_date); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->trip_days): ?>
                        <tr>
                            <td class="">Trip Days</td>
                            <td class=""><?php echo e($request->trip_days); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->total_travellers): ?>
                        <tr>
                            <td class="">Num of people</td>
                            <td class=""><?php echo e($request->total_travellers); ?> </td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->no_of_people): ?>
                        <tr>
                            <td class="">Num of people</td>
                            <td class=""><?php echo e($request->no_of_people); ?> </td>
                        </tr>
                    <?php endif; ?>
                     <?php if($request->price): ?>
                        <tr>
                            <td class="">Custom Price</td>
                            <td class=""><?php echo e($request->price); ?> </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
                
            <h3>Personal Information</h3>
            <table class="">
                <tbody>
                <?php if($request->full_name): ?>
                    <tr>
                        <td class="">Name</td>
                        <td class=""><?php echo e($request->full_name); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->name): ?>
                    <tr>
                        <td class="">Name</td>
                        <td class=""><?php echo e($request->name); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->first_name || $request->last_name): ?>
                    <tr>
                        <td class="">Name</td>
                        <td class=""><?php echo e($request->first_name); ?> <?php echo e($request->last_name); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->gender): ?>
                    <tr>
                        <td class="">Gender</td>
                        <td class=""><?php echo e($request->gender); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->dob): ?>
                    <tr>
                        <td class="">D.O.B</td>
                        <td class=""><?php echo e($request->dob); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->nationality): ?>
                    <tr>
                        <td class="">Nationality</td>
                        <td class=""><?php echo e($request->nationality); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->passport_number): ?>
                    <tr>
                        <td class="">Passport No.</td>
                        <td class=""><?php echo e($request->passport_number); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($request->passport_expire): ?>
                    <tr>
                        <td class="">Passport Exp.</td>
                        <td class=""><?php echo e($request->passport_expire); ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <h3>Contact Information</h3>
            <table class="table admin-form table-striped dataTable" id="datatable3">
                <tbody>
                    <?php if($request->email): ?>
                        <tr>
                            <td class="">Email</td>
                            <td class=""><?php echo e($request->email); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->emailid): ?>
                        <tr>
                            <td class="">Email</td>
                            <td class=""><?php echo e($request->emailid); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->phone): ?>
                        <tr>
                            <td class="">Phone</td>
                            <td class=""><?php echo e($request->phone); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->country): ?>
                        <tr>
                            <td class="">Country</td>
                            <td class=""><?php echo e($request->country); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->address): ?>
                        <tr>
                            <td class="">Address</td>
                            <td class=""><?php echo e($request->address); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->zip): ?>
                        <tr>
                            <td class="">Zip/Postal.</td>
                            <td class=""><?php echo e($request->zip); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if($request->message): ?>
                        <tr>
                            <td class="">Message</td>
                            <td class=""><?php echo e($request->message); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            
        </div>
    </body>
</html>
<?php /**PATH /home/lhakpa/public_html/resources/views/emails/admin-bookingmail.blade.php ENDPATH**/ ?>