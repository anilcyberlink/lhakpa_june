<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo e($setting->site_name); ?></title>
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
            <img src="<?php echo e(asset('theme-assets/img/logo.png')); ?>" style="width: 25%"/>
        </div>
    </blockquote>
    <h3>Customize Trip / User Details:</h3>
    <table>

        <tr>
            <td bgcolor="#ddd"  ><strong>Full Name</strong></td>
            <td bgcolor="#ddd" ><?php echo e($name); ?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo e($mail); ?></td>
        </tr>
        <tr>
            <td><strong>Phone </strong></td>
            <td><?php echo e($contact); ?></td>
   
        <tr> 
            <td><strong>Number of People</strong></td>
            <td><?php echo e($num_ppl); ?></td>
        </tr>
        <tr>
            <td><strong>Trip Name</strong></td>
            <td><?php echo e(tripdetail($trip_id)->trip_title); ?></td>
        </tr>
    
        <tr>
            <td><strong> Trip Start Date </strong></td>
            <td><?php echo e($date); ?></td>
        </tr>
        <tr>
            <td><strong> Client Country </strong></td>
            <td><?php echo e($country); ?></td>
        </tr>
        <tr>
            <td><strong>Message</strong></td>
            <td><?php echo $messages; ?></td>
        </tr>
    </table>


</div>
</body>
</html>
<?php /**PATH /home/lhakpa/public_html/resources/views/emails/adminCustomize.blade.php ENDPATH**/ ?>