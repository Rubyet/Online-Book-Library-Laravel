<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>rating test</title>
   
    
    
    <link rel="stylesheet" href="scss.css" type="text/css" media="screen" title="Rating CSS">
    
    
</head>

<body>
<div class="comment_block">

 <!-- used by #{user} to create a new comment -->
 <div class="create_new_comment">

    <!-- current #{user} avatar -->
     <div class="user_avatar">
         <img src="/images/sample.jpg">
     </div><!-- the input field --><div class="input_comment">
         <form method="post" action="/book/comment">
         {{csrf_field()}}
            <input type="text" name="comment" placeholder="Join the conversation..">
            <input type="submit" value="Submit">
        </form>
     </div>

 </div>


 <!-- new comment -->
 <div class="new_comment">

    <!-- build comment -->
     <ul class="user_comment">

         <!-- current #{user} avatar -->
         <div class="user_avatar">
             <img src="samle2.jpg">
         </div><!-- the comment body -->
         
         <div class="comment_body">
             <p>Comment will go here</p>
         </div>

         <!-- comments toolbar -->
         <div class="comment_toolbar">

             <!-- inc. date and time -->
             <div class="comment_details">
                 <ul>
                     <li><i class="fa fa-calendar"></i> 04/01/2015</li>
                     <li><i class="fa fa-pencil"></i> John Smith</li>
                 </ul>
             </div>

         </div>

         <!-- start user replies -->
     

     </ul>

 </div>
</div>



</body>
</html>
