
<?php include('navBar.php'); ?>

<div class="container">
 <div class="row">
  <div class="col-md-12">

  
<h2 class="welcome">You are viewing form elements</h2>


<p class="info"><br>
<span class="bigText">Form Elements</span> - The following section explains what the various form elements
are and how to integrate them into your website.  

</p>
  </div>
  </div><br><br> 
</div>  

<div class="container">
 <div class="row">
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Label</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		The <strong>for</strong> attribute of the <strong>label tag</strong> should be equal to the 
	    <strong>id</strong> attribute of an input element to bind them together.</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">&lt;label <strong>for="fname"</strong>&gt;First Name&lt;/label&gt;</code>
		<h3>Example</h3>
        <label for="fname">First Name:</label>
        </td>
	  </tr> 
	  </tbody>
	  </table>
  </div> 
  
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Input</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		Creates a form field which is used to get input from the user</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">
		&lt;label <strong>for="fname"</strong>&gt;First Name&lt;/label&gt;
		<br>&lt;input type="text" <strong>id="fname"</strong> name="fname"&gt;</code>
		<h3>Example</h3>
		<label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter your first name">
        </td>
	  </tr> 
	  </tbody>
	  </table>
  </div><br><br>
  </div>  
  
  <div class="row">
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Select</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		Creates a dropdown box with a list of options for a user to choose
		</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">&lt;label <strong>for="color"</strong>&gt;Pick a color&lt;/label&gt;
		<br>&lt;select <strong>id="color"</strong> name="color"&gt;
		<br>&nbsp;&nbsp;&lt;option value="Pink"&gt;Pink&lt;/option&gt;
		<br>&nbsp;&nbsp;&lt;option value="Navy"&gt;Navy&lt;/option&gt;
		<br>&nbsp;&nbsp;&lt;option value="Peach"&gt;Peach&lt;/option&gt;
		<br>&lt;/select&gt;
		</code>
		<h3>Example</h3>
		<label for="color">Pick a color:</label>
		<select class="form-control" id="color">
          <option value="Pink">Pink</option>
          <option value="Navy">Navy</option>
          <option value="Peach">Peach</option>          
        </select>
	    </td>
	  </tr> 
	  </tbody>
	  </table>
  </div>
  
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Textarea</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		Defines a multi-line input form field
		</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">&lt;textarea name="message" rows="10" cols="30"&gt;Some text&lt;/textarea&gt;</code>
		<h3>Example</h3>
		<label for="comments">Add a Comment:</label>
		<textarea class="form-control" rows="5" id="comments"></textarea>
	    </td>
	  </tr> 
	  </tbody>
	  </table>
  </div> 
  </div>  
  
  <div class="row">
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Checkboxes</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		Creates three rows of checkboxes which are used if you want the user to select any number of options from a list of preset options.</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">&lt;label <strong>for="option"</strong>&gt;Check all that apply:&lt;/label&gt;
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="checkbox" name="option" id="Option1" &nbsp;&nbsp;value=""&gt;Option1
		<br>&lt;/div&gt;
		
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="checkbox" name="option" id="Option2" &nbsp;&nbsp;value=""&gt;Option2
		<br>&lt;/div&gt;
		
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="checkbox" name="option" id="Option3" &nbsp;&nbsp;value=""&gt;Option3
		<br>&lt;/div&gt;
				
		</code>
		<h3>Example</h3>
		<label for="option">Check all that apply:</label>
		<div class="checkbox">
        <label><input type="checkbox" name="option" id="Option1" value="">Option 1</label>
        </div>
		<div class="checkbox">
        <label><input type="checkbox" name="option" id="Option2" value="">Option 2</label>
        </div>
		<div class="checkbox">
        <label><input type="checkbox" name="option" id="Option3" value="">Option 3</label>
        </div>		
	    </td>
	  </tr> 
	  </tbody>
	  </table>
  </div>
  
 
  <div class="col-md-6"> 
  <table class="table">
    <thead>
      <tr>
        <th><h3>Radio Buttons</h3></th> 				
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p class="info2">
		<h3>Description</h3>
		Radio buttons are used if you want to limit the user to just one selection from a list of preset options.
		</p>
		<h3>Syntax</h3>	
		<code class="codeBlk2">&lt;label <strong>for="option"</strong>&gt;Select an option:&lt;/label&gt;
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="radio" name="option" id="Option1" &nbsp;&nbsp;value=""&gt;Option1
		<br>&lt;/div&gt;
		
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="radio" name="option" id="Option2" &nbsp;&nbsp;value=""&gt;Option2
		<br>&lt;/div&gt;
		
		<br>&lt;div&gt;
		<br>&nbsp;&nbsp;&lt;input type="radio" name="option" id="Option3" &nbsp;&nbsp;value=""&gt;Option3
		<br>&lt;/div&gt;				
		</code>	
		<h3>Example</h3>
		<label for="option">Select an option:</label>
		<div class="radio">
        <label><input type="radio" name="option" id="Option1" value="">Option 1</label>
        </div>
		<div class="radio">
        <label><input type="radio" name="option" id="Option2" value="">Option 2</label>
        </div>
		<div class="radio">
        <label><input type="radio" name="option" id="Option3" value="">Option 3</label>
        </div>		
		
	    </td>
	  </tr> 
	  </tbody>
	  </table>
      </div>
  
  
  
  
  
  
  
	<!-- https://www.w3schools.com/html/html_form_elements.asp -->  
	 


  
    
  </div><br><br>
</div> 
</div>


<?php include 'footer.php'; ?>	

</body>
</html>