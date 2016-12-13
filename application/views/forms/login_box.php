


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo form_open('login/userLogin'); ?>
                    <div class="form-group">
                        <label for="username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Summoner Name">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default">Login</button></div>

                    </form>
                </div>

                <table class="table panel-footer text-center">
                    <tr>
                        <td><a href="/registration">Registration</a></td>
                        <td>Forgotten Password</td>
                    </tr>
                </table>

            </div>
        </div>