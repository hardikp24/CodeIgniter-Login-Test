<?php include 'includes/header.php'; ?>

<h1>Login Form</h1>
<?php echo validation_errors(); ?>

<?php echo form_open('LoginController/checkLogin'); ?>
    
    Username:<br><input type="text" name="username" placeholder="Username" /><br><br>
    Password<br> <input type="password" name="password" placeholder="Create Password" /><br><br>
    <input type="submit" value="Login" name="submit">
</form>

<?php include 'includes/footer.php'; ?>