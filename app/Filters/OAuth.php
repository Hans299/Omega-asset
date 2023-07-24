<?php 
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class OAuth implements FilterInterface
{
  public function before(RequestInterface $request,  $arguments = null)
  {
    $link = \Config\Services::request()->uri->getSegment(1);
    if($link == 'auth') {
      if(!session('authenticated')) {
        return redirect()->to(base_url('auth/login'));
      }
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response,  $arguments = null)
  {
    $link = \Config\Services::request()->uri->getSegment(1);
    if($link == 'auth') {
      if(session('authenticated')) {
        return redirect()->to(base_url('account/dashboard'));
      }
    }
  }
}