@extends('layouts.head')

@section('content')
<div class="row">

    <center> 
        <div>
            <h1> HEAD </h1>           
        </div>
        <div>
            <a href="#" style="text-decoration:none"> หัวข้อ1 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ2 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ3 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ4 &nbsp; </a>
        </div>
    </center>
    <form action="#" method="post">

        Short Description: 
        <textarea cols="50" id="editor1" name="editor1" rows="10"></textarea> <br>

        <script type="text/javascript">

            CKEDITOR.replace('editor1', {

                height: "200px", //กำหนดความสูง  

                width: "720px", //กำหนดความกว้าง  

                toolbar: //กลุ่มเครื่องมือ ตัดออก เพิ่มเข้าได้  

                        [
                            [
                                'Bold', 'Italic', 'Underline', '-',
                                'Subscript', 'Superscript', '-',

                                'NumberedList', 'BulletedList', '-',
                                'Link', 'Unlink', '-',
                                'Cut', 'Copy', 'Paste', '-',
                                'Undo', 'Redo'
                            ],

                            [
                                'Outdent', 'Indent', '-',
                                'JustifyCenter', 'JustifyRight', 'JustifyBlock'
                            ],

                            '/',

                            [
                                'Image', 'Table', 'HorizontalRule', '-',
                                'Font', 'FontSize', 'TextColor', 'BGColor'
                            ]
                        ]

            }
            );

        </script> <br>

        <input type="submit" name="submit" value="ยืนยัน">
    </form>

</div>
@endsection

<!--@section('footer')
 
@endsection-->