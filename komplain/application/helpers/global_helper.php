<?php

function checkRes($query) {
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return false;
	}
}

/**
 * Check if Result Query has one row
 *
 * @param unknown $query        	
 * @return boolean
 */
function checkRow($query) {
	if ($query->num_rows() > 0) {
		return $query->row();
	} else {
		return false;
	}
}

/**
 * Count Row
 *
 * @param unknown $query        	
 * @return boolean
 */
function countRow($query) {
	if ($query->num_rows() > 0) {
		return $query->num_rows();
	} else {
		return false;
	}
}

/**
 * Only Number Allow
 *
 * @param unknown $num        	
 * @return mixed
 */
function numberOnly($num) {
	return preg_replace('/\D/', '', $num);
}

function checkAdminBendahara() {
	// echo $_SESSION['level_id'];
	if (isset($_SESSION['level_id'])) {
		if ($_SESSION['level_id'] == 1 OR $_SESSION['level_id'] == 3) {
			return true;
		} else {
			redirect('admin/dashboard');
		}
	} else {
		redirect('auth/login');
	}
}

function checkDonatur() {
	// echo $_SESSION['level_id'];
	if (isset($_SESSION['level_id'])) {
		if ($_SESSION['level_id'] == 3) {
			return true;
		} else {
			redirect('site');
		}
	} else {
		redirect('auth/login_donatur');
	}
}

/**
 * User Login insert Session
 *
 * @param unknown $username        	
 * @param unknown $user_id        	
 * @param unknown $full_name        	
 * @param unknown $level        	
 * @param unknown $company_id        	
 * @param unknown $company_name        	
 */
function define_sess($username, $user_id, $full_name, $email, $level_id) {
	// $_SESSION['jk_username'] = $username;
	// $_SESSION['jk_user_id'] = $user_id;
	// $_SESSION['jk_full_name'] = $full_name;
	// $_SESSION['jk_level'] = $level;
	$ci = & get_instance();
	$newdata = array( 'username' => $username, 'user_id' => $user_id, 'full_name' => $full_name, 'email' => $email, 'level_id' => $level_id, 'last_url' => $_SERVER['HTTP_REFERER'], 'logged_in' => TRUE );
	$ci->session->set_userdata($newdata);
	// echo USERNAME;exit;
	// print_r($_SESSION);exit;
}

/**
 * For Back to previous URL
 */
function previous_url() {
	if ($_SESSION['last_url']) {
		return header('Location: ' . $_SESSION['last_url']);
	} elseif ($_SESSION['last_url'] == 'logout') {
		echo 'bad';
	} elseif ($_SESSION['cart_contents']) {
		return redirect('cart/list');
	} elseif (! isset($_SESSION['cart_contents'])) {
		return redirect('product');
	} else {
		return redirect('product/tees');
	}
}

function fire($log) {
	$ci = & get_instance();
	$ci->load->library('firephp');
	return $ci->firephp->log($log, __METHOD__);
}

function uploader($log) {
	$ci = & get_instance();
	$ci->load->library('uploadhandler');
	return $ci->uploadhandler->log($log, __METHOD__);
}

/**
 * Generate Slug
 *
 * @param string $text        	
 * @return string|mixed
 */
function slugify($text) {
	// replace non letter or digits by -
	$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	// trim
	$text = trim($text, '-');
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// lowercase
	$text = strtolower($text);
	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);
	if (empty($text)) {
		return 'n-a';
	}
	return $text;
}

/**
 * Get First Digit
 *
 * @param unknown $char        	
 * @return string
 */
function get3Digit($char) {
	return substr($char, 0, 3);
}

/**
 * Image Url
 *
 * @return string
 */
function img_url() {
	return base_url() . 'assets/img/';
}

/**
 * Product Thumbnail Url
 *
 * @return string
 */
function prod_thumb_url() {
	return base_url() . 'assets/product/thumb/';
}

/**
 * Product Original Url
 *
 * @return string
 */
function prod_ori_url() {
	return base_url() . 'assets/product/ori/';
}

/**
 * Product Small Image Url
 *
 * @return string
 */
function prod_small_url() {
	return base_url() . 'assets/product/small/';
}

function basic_path() {
	$fr_loc = explode('/', $_SERVER['SCRIPT_NAME']);
	$base_path = $_SERVER['DOCUMENT_ROOT'] . '/' . $fr_loc[1] . '/';
	return $base_path;
}

/**
 *
 * @return page url
 */
function page_url() {
	return site_url() . 'page/';
}

/**
 * Delete Unused Character
 *
 * @param string $text        	
 * @return mixed
 */
function delUn($text) {
	$remove = array( 'copy', 'close' );
	$string = str_replace($remove, '', $text);
	return $string;
}

/**
 * Replace char
 *
 * @param unknown $text        	
 * @return mixed
 */
function repChar($text) {
	$remove = array( '&' );
	$string = str_replace($remove, '-', $text);
	return $string;
}

/**
 * Delete Extension
 *
 * @param unknown $filename        	
 * @return mixed
 */
function delExt($filename) {
	return preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
}

function clearName($filename) {
	return repChar(delUn(delExt($filename)));
}

/**
 * Minus Percantage Ex.
 * 90 - 10% = 80
 *
 * @param number $before        	
 * @param number $min        	
 * @return number
 */
function min_percent($before, $min) {
	return $before * ((100 - $min) / 100);
}

/**
 * Delete files
 *
 * @param path $path        	
 */
function deleteFiles($path) {
	$files = glob($path . '*'); // get all file names
	foreach ($files as $file ) { // iterate files
		if (is_file($file))
			unlink($file); // delete file
				               // echo $file.'file deleted';
	}
}

function debug($params) {
	echo '<pre>';
	print_r($params);
	echo '</pre>';
}

function dump($params) {
	echo '<pre>';
	var_dump($params);
	echo '</pre>';
}

/**
 * Default config for upload
 * 
 * @param path $uploadPath        	
 * @return string
 */
function configUpload($uploadPath) {
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '1000';
	$config['max_width'] = '2000';
	$config['max_height'] = '1024';
	$config['max_height'] = '1024';
	$config['upload_path'] = $uploadPath;
	return $config;
}

/**
 * Get Message
 * 
 * @param unknown $uri        	
 * @return string
 */
function getMessage($uri) {
	if ($uri == "delete_success")
		$data['message'] = "<div class='alert alert-success'>Delete Success</div>";
	else if ($uri == "add_success")
		$data['message'] = "<div class='alert alert-success'>Insert Success</div>";
	else if ($uri == "update_success")
		$data['message'] = "<div class='alert alert-success'>Update Success</div>";
	else
		$data['message'] = '';
	return $data['message'];
}

function year_add($year) {
	return $year . '-01-01';
}

function year_only($date) {
	return date('Y', strtotime($date));
}

function indoDateFormat($date) {
	return date('d-m-Y', strtotime($date));
}

function sqlDateFormat($date) {
	return date('Y-m-d', strtotime($date));
}

function periode($var = '')
{
	$tgl = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");

	$pecah = explode(" ", $var);
	$pecah2 = explode("-", $pecah[0]);

	return $tgl[$pecah2[1]-1]."-".$pecah2[0];
}

function bulan($var ='') { 

		$BulanIndo = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");
	
		$bulan = substr($var, 0, 1); 

		$result = $BulanIndo[(int)$bulan-1];
		return($result);
}

function tahun_2digit($var ='') { 

		$tahun = substr($var, 2, 2); 
		
		$result = $tahun;
		return($result);
}

function imgdonatur_url() {
	return base_url() . 'assets/donatur/thumb/';
}

function bulan_sekarang(){
	$bulan = print date('n');
	return $bulan;
}

	