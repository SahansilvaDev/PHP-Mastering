<?php 
    $connection = mysqli_connect('localhost','root','','cms');

    if(isset($_POST['save'] )){
        $content = mysqli_real_escape_string($connection, $_POST['content']);

        $query = "UPDATE pages SET content = '{$content}' WHERE id = 1";

        $result = mysqli_query($connection,$query);

        header('Location: index.php');
    }




    $query = "SELECT * FROM pages WHERE id = 1";
    $result_set = mysqli_query($connection,$query);//query result get to variable

    $result = mysqli_fetch_assoc($result_set);//to query result into  result variable into association array using function in 'mysqli_fetch_assoc'

    $content = $result['content'];//get into content varible to result varible inside a content field




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <style>
        textarea{
            width: 1000px; height: 600px;
        }

    </style>
    <!--CK editor with CDN import-->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css">


</head>
<body>


    <h1>Edit Content</h1>
    
    <form action="edit_content.php" method="post">
        
        
        <p>
            <textarea name="content" id="editor" >
                
                <?php  echo $content ?>

            </textarea>
            <button type="submit" name="save">Save Page</button>
        </p>
    </form>


    <script type="importmap">
			{
				"imports": {
					"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js",
					"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.1/"
				}
			}
		</script>
		<script type="module">
			import {
				ClassicEditor,
				Essentials,
				Paragraph,
				Bold,
				Italic,
				Font,
                Link,Indent, IndentBlock, BlockQuote
			} from 'ckeditor5';
			ClassicEditor
				.create( document.querySelector( '#editor' ), {
					plugins: [ Essentials, Paragraph, Bold, Italic, Font,Link,Indent, IndentBlock, BlockQuote ],
					toolbar: [
						'undo', 'redo', '|', 'bold', 'italic', '|',
						'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'link' ,'outdent', 'indent', 'blockquote'
					],
                    menuBar: {
            isVisible: true
        }
				} )
				.then( editor => {
					window.editor = editor;
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>

</body>
</html>