<?php

namespace UserBundle\Services;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
 
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected 
        $router,
        $security;
    
    public function __construct(Router $router, AuthorizationChecker $security)
    {
        $this->router = $router;
        $this->security = $security;
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // URL for redirect the user to where they were before the login process begun if you want.
        // $referer_url = $request->headers->get('referer');
        
        // Default target for unknown roles. Everyone else go there.
        $url = 'homepage';
        if($this->security->isGranted('ROLE_ADMIN')) {
            $url = 'admin';
        }elseif($this->security->isGranted('ROLE_PRO')) {
            $url = 'pro_homepage';
        }elseif($this->security->isGranted('ROLE_USER')){
            $url = 'part_homepage';
        }
        $response = new RedirectResponse($this->router->generate($url));
            
        return $response;
    }
}