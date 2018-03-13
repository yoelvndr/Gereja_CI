<html>
	<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GBI AS | Administrator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>/favicon.ico">


        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/navmenu/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/portfolio.jquery.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/fonticons.css">
   
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/plugins.css" />

        <!--Theme custom css -->
   

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css" />

        <script src="<?php echo base_url(); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<style>
		input{
			width:150px;
			text-align:center;
		}
		</style>
	</head>
	<body>
	<?php echo form_open_multipart("cont/admin"); ?>
		<div id="container">
			
			<div id="event" style="border-radius:10px; border:solid 1px #000000;">
				<div class="col-md-6">
				<h3>Master of Event</h3>
				
				</div>
				<div  class="col-md-6">
				<h3>List of Event</h3>
			
				
				</div>
			</div>
			
			<div id="kesaksian">
				<div class="col-md-12">
				<h3>Master of Kesaksian</h3>
				
				<table border="1" style="font-size:10pt; text-align:center;">
				<tr>
					<th>Tanggal</th>
					<th>Gambar Kesaksian</th>
					<th>Gambar Headline</th>
					<th>Video Kesaksian</th>
					<th>Judul Kesaksian</th>
					<th>Headline Kesaksian</th>
					<th>Content Kesaksian</th>
					<th>Upload</th>
					
				</tr>
				<?php foreach($list_kesaksian as $row)
				{
					echo "<tr>";
					echo "<td><input type='text' name='tanggal' placeholder='Tanggal Kesaksian' value='".$row->tgl_saksi."'></td>";
					echo "<td><img src='".base_url()."assets/images/kesaksian/".$row->gbr_saksi."' width='200px'></td>";
					echo "<td><img src='".base_url()."assets/images/kesaksian/".$row->gbr_headline."' width='200px'></td>";
					echo "<td><input type='text' name='video' placeholder='Link Video' value='".$row->link_video."'></td>";
					echo "<td><input type='text' name='judul' placeholder='Judul Kesaksian' value='".$row->judul_saksi."'></td>";
					echo "<td><textarea name='headline' placeholder='Headline Kesaksian' value='".$row->headline_saksi."'>".$row->headline_saksi."</textarea></td>";
					echo "<td><textarea name='content' placeholder='Content Kesaksian' value='".$row->content_saksi."'>".$row->content_saksi."</textarea></td>";
					echo "<input type='hidden' name='id' value='".$row->id_saksi."'>";
					echo "<td>".form_submit('update','Update')."</td>";
					echo "</tr>";
				}
					echo "<tr>";
					echo "<td><input type='text' name='tanggal' placeholder='Tanggal Kesaksian'></td>";
					echo "<td>".form_upload('gbr_saksi')."</td>";
					echo "<td>".form_upload('gbr_headline')."</td>";
					echo "<td><input type='text' name='video' placeholder='Link Video'></td>";
					echo "<td><input type='text' name='judul' placeholder='Judul Kesaksian'></td>";
					echo "<td><textarea name='headline' placeholder='Headline Kesaksian'></textarea></td>";
					echo "<td><textarea name='content' placeholder='Content Kesaksian'></textarea></td>";
					echo "<td>".form_submit('insert','Insert')."</td>";
					echo "</tr>";
				?>
				</table>
				
				</div>
			</div>
			
			<div id="info">
				<div class="col-md-12">
				<h3>Master of Info</h3>
			
				<table border="1" style="font-size:10pt; text-align:center;">
				<tr>
					<th>Tanggal</th>
					<th>Gambar Kesehatan</th>
					<th>Gambar Headline</th>
					<th>Video Kesehatan</th>
					<th>Judul Kesehatan</th>
					<th>Headline Kesehatan</th>
					<th>Content Kesehatan</th>
					<th>Upload</th>
					
				</tr>
				<?php foreach($list_kesehatan as $row)
				{
					echo "<tr>";
					echo "<td><input type='text' name='tanggal' placeholder='Tanggal Kesehatan' value='".$row->tgl_sehat."'></td>";
					echo "<td><img src='".base_url()."assets/images/kesehatan/".$row->gbr_sehat."' width='200px'></td>";
					echo "<td><img src='".base_url()."assets/images/kesehatan/".$row->gbr_headline."' width='200px'></td>";
					echo "<td><input type='text' name='video' placeholder='Link Video' value='".$row->link_video."'></td>";
					echo "<td><input type='text' name='judul' placeholder='Judul Kesehatan' value='".$row->judul_sehat."'></td>";
					echo "<td><textarea name='headline' placeholder='Headline Kesehatan' value='".$row->headline_sehat."'>".$row->headline_sehat."</textarea></td>";
					echo "<td><textarea type='text' name='content' placeholder='Content Kesehatan' value='".$row->content_sehat."'>".$row->content_sehat."</textarea></td>";
					echo "<input type='hidden' name='id' value='".$row->id_sehat."'>";
					echo "<td>".form_submit('update','Update')."</td>";
					echo "</tr>";
				}
				
					echo "<tr>";
					echo "<td><input type='text' name='tanggal' placeholder='Tanggal Kesehatan'></td>";
					echo "<td>".form_upload('gbr_sehat')."</td>";
					echo "<td>".form_upload('gbr_headline')."</td>";
					echo "<td><input type='text' name='video' placeholder='Link Video'></td>";
					echo "<td><input type='text' name='judul' placeholder='Judul Kesehatan'></td>";
					echo "<td><textarea name='headline' placeholder='Headline Kesehatan'></textarea></td>";
					echo "<td><textarea name='content' placeholder='Content Kesehatan'></textarea></td>";
					echo "<td>".form_submit('insert','Insert')."</td>";
					echo "</tr>";
				?>
				</table>
				<?php echo form_close(); ?>
				</div>
			</div>
			
		</div>
	</body>
</html>