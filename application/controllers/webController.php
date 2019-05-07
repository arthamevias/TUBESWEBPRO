<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class webController extends CI_Controller {
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
        parent::__construct();
        $this->load->model('akun');
    }
    
	public function index(){
		$this->load->view('tubes');
	}

	public function halaman_login(){
        if(isset($_POST['submit'])){
            $u = $this->input->post('username');
            $p = $this->input->post('password');
            //pakai md5
            //$p = md5($this->input->post('password'));
            //jika username dan password yang diinput ada, maka session akan dibuat dan langsung ke halaman_login sambil bawa variabel $sesi sebagai parameter buat menampilkan nama user
            if ($this->akun->login_a($u,$p) > 0) {
                //buat session untuk menampilkan nama user pada halaman login
                $sesi = array(
                            'nama_user' => $u,
                            'level_user' => 'user'
                );
                $this->session->set_flashdata($sesi);
                $this->load->view('halaman_login',$sesi);
            }
            //jika username dan password salah, kembali ke view login
            else{
                echo $u.'<br>'.$p.'<br>';
                echo "username atau password tidak ditemukan";
                $this->load->view('login');
                
            }
        }
        // jika tombol submit tidak ditekan, maka yang tampil adalah form login
        else{
            $this->load->view('login');
        }
		
	}

	public function login(){
		$this->load->view('login');
	}

	public function login_a(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //pakai md5
        //$password = md5($this->input->post('password'));
        $cek = $this->akun->login($username, $password);
        if ($cek) {
            $data = array(
            'logged_in' => 1,
            'username' => $cek->username
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('login_alert', 'login_berhasil');
            redirect('webController/halaman_login');
        } else {
            $this->session->set_flashdata('login_alert', 'login_gagal');
            redirect('webController/login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('webController/index');
    }

	public function regis_akun_a(){
        if($this->input->post('submit')){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //pakai md5
            //$p = md5($this->input->post('password'));
            $ulang_pass = $this->input->post('ulang');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $kategori_alamat = $this->input->post('kategori');
            $tipe_alamat = $this->input->post('tipe_alamat');
            $kota = $this->input->post('jp_input');
            $detail_alamat = $this->input->post('address');
            $data = array(
                'username' => $username,
                'password' => $password,
                'ulang_pass' => $ulang_pass,
                'nama' => $nama,
                'email' => $email,
                'telepon' => $telepon,
                'kategori_alamat' => $kategori_alamat,
                'tipe_alamat' => $tipe_alamat,
                'kota' => $kota,
                'detail_alamat' => $detail_alamat
            );
        
        $add = $this->akun->registrasi($data);

        if($add){
            redirect('webController/login');
        }else{
            redirect('webController/registrasi');
        }
    }
    }

    public function kontak_a(){
        if($this->input->post('submit')){
            $tipe_alamat = $this->input->post('tipe_alamat');
            $nama = $this->input->post('nama');
            $tel = $this->input->post('tel');
            $email = $this->input->post('email');
            $tell = $this->input->post('tell');
            $data = array(
                'tipe_alamat' => $tipe_alamat,
                'nama' => $nama,
                'tell' => $tel,
                'email' => $email,
                'tell' => $tell
            );

        $kon = $this->akun->kontakkami($data);

        if($kon){
            redirect('webController/index');
        }else{
            redirect('webController/kontakkami');
        }
    }
    }


	public function promo(){
		$this->load->view('promo');
	}

	public function ttgkami(){
		$this->load->view('ttgkami');
	}

	public function registrasi(){
		$this->load->view('registrasi');
	}

    public function allmenu(){
        $this->load->view('allmenu');
    }

    public function mainmenu(){
        $this->load->view('mainmenu');
    }

    public function beefteriyaki(){
        $this->load->view('beefteriyaki');
    }

    public function beefyakiniku(){
        $this->load->view('beefyakiniku');
    }

    public function chickenyakiniku(){
        $this->load->view('chickenyakiniku');
    }

    public function chickenteriyaki(){
        $this->load->view('chickenteriyaki');
    }

    public function steak(){
        $this->load->view('steak');
    }

    public function friedmenu(){
        $this->load->view('friedmenu');
    }

    public function chickenkatsu(){
        $this->load->view('chickenkatsu');
    }

    public function ebifurai(){
        $this->load->view('ebifurai');
    }

    public function eggroll(){
        $this->load->view('eggroll');
    }

    public function Ekkado(){
        $this->load->view('Ekkado');
    }

    public function shrimproll(){
        $this->load->view('shrimproll');
    }

    public function karage(){
        $this->load->view('karage');
    }

    public function sakana(){
        $this->load->view('sakana');
    }

    public function somay(){
        $this->load->view('somay');
    }

    public function somaygoreng(){
        $this->load->view('somaygoreng');
    }

    public function takoyaki(){
        $this->load->view('takoyaki');
    }

    public function clearsoup(){
        $this->load->view('clearsoup');
    }

    public function shirataki(){
        $this->load->view('shirataki');
    }

    public function shrimpball(){
        $this->load->view('shrimpball');
    }

    public function Sukiyaki(){
        $this->load->view('Sukiyaki');
    }

    public function furisalad(){
        $this->load->view('furisalad');
    }

    public function nasi(){
        $this->load->view('nasi');
    }

    public function salad(){
        $this->load->view('salad');
    }

    public function esogura(){
        $this->load->view('esogura');
    }

    public function pudingcoklat(){
        $this->load->view('pudingcoklat');
    }

    public function pudingmangga(){
        $this->load->view('pudingmangga');
    }

    public function aqua(){
        $this->load->view('aqua');
    }

    public function jusjeruk(){
        $this->load->view('jusjeruk');
    }

    public function milo(){
        $this->load->view('milo');
    }

    public function ocha(){
        $this->load->view('ocha');
    }

    public function bentospecial4(){
        $this->load->view('bentospecial4');
    }

    public function hokahemat4(){
        $this->load->view('hokahemat4');
    }

    public function kidzu1(){
        $this->load->view('kidzu1');
    }

    public function omiyage4(){
        $this->load->view('omiyage4');
    }

    public function valueset(){
        $this->load->view('valueset');
    }

    public function premiumset(){
        $this->load->view('premiumset');
    }

    public function kontakkami(){
        $this->load->view('kontakkami');
    }

    public function soup(){
        $this->load->view('soup');
    }

    public function dessert(){
        $this->load->view('dessert');
    }

    public function beverage(){
        $this->load->view('beverage');
    }

    public function snack(){
        $this->load->view('snack');
    }

    public function sidedishes(){
        $this->load->view('sidedishes');
    }

    public function setmenus(){
        $this->load->view('setmenus');
    }

    public function karir(){
        $this->load->view('karir');
    }

    public function step1(){
        $this->load->view('step1');
    }

    public function step2(){
        $this->load->view('step2');
    }

    public function party(){
        $this->load->view('party');
    }
}
?>