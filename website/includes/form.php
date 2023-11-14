<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>

            <legend>
            Contact LaMonte
            </legend>
             <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">        
            <span><?php echo $first_name_err ;?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">  
            <span><?php echo $last_name_err ;?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">  
            <span><?php echo $email_err ;?></span>

            <label>Phone</label>
            <input type="tel" name="phone" aria-label="Please enter your phone number" placeholder="ex. (111)-111-1111" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
            <span><?php echo $phone_err ;?></span>

            <label>Age</label>

                <ul>
                    <li><input type="radio" name="age" value="child"<?php if(isset($_POST['age']) && $_POST['age'] == 'child') echo 'checked="checked"';?>>Children 8-12 yrs old</li>

                    <li><input type="radio" name="age" value="youth"<?php if(isset($_POST['age']) && $_POST['age'] == 'youth') echo 'checked="checked"';?>>Youth 13-17</li>    

                    <li><input type="radio" name="age" value="adult"<?php if(isset($_POST['age']) && $_POST['age'] == 'adult') echo 'checked="checked"';?>>Adult</li>
                </ul>
            <span><?php echo $age_err ;?></span>
        
            

            <label>Instrument</label>
            <ul>
                <li><input type="checkbox" name="instrument[]" value="guitar"<?php if(isset($_POST['instrument']) && in_array('guitar',$instrument)) echo 'checked = "checked"';?>>Guitar</li>

                <li><input type="checkbox" name="instrument[]" value="bass"<?php if(isset($_POST['instrument']) && in_array('bass',$instrument)) echo 'checked = "checked"';?>>Bass</li>

                <li><input type="checkbox" name="instrument[]" value="piano"<?php if(isset($_POST['instrument']) && in_array('piano',$instrument)) echo 'checked = "checked"';?>>Piano</li>

                <li><input type="checkbox" name="instrument[]" value="drum"<?php if(isset($_POST['instrument']) && in_array('drum',$instrument)) echo 'checked = "checked"';?>>Drums</li>

                <li><input type="checkbox" name="instrument[]" value="voice"<?php if(isset($_POST['instrument']) && in_array('voice',$instrument)) echo 'checked = "checked"';?>>Voice</li>
               
            </ul>    
            <span><?php echo $instrument_err ;?></span>

        <label>Course location</label>    

            <select name="course_type">
                <option value=""
                <?php if(isset($_POST['course_type']) && is_null($_POST['course_type'])) echo 'selected="unselected"';?>>Select One!</option>

                <option value="online"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="online") echo 'selected="unselected"';?>>Online</option>

                <option value="in_person"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="in_person") echo 'selected="unselected"';?>>In-Person</option>

               
            </select>
            <span><?php echo $course_type_err ;?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
            <span><?php echo $comments_err ;?></span>
            
            

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"';?>>Yes</li>
            </ul>
            <span><?php echo $privacy_err ;?></span>

            <input type="submit" value="Send it">

            <p><a href="">Reset</a></p>
 
 
        </fieldset>
    </form>


