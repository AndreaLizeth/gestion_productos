<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Entity\City;
=======
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
use App\Entity\Country;
use App\Form\CountryType;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\JsonResponse;
=======
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
<<<<<<< HEAD
 * @Route("/pais")
=======
 * @Route("/country")
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
 */
class CountryController extends AbstractController
{
    /**
     * @Route("/", name="country_index", methods={"GET"})
     */
    public function index(CountryRepository $countryRepository): Response
    {
        return $this->render('country/index.html.twig', [
            'countries' => $countryRepository->findAll(),
        ]);
    }

    /**
<<<<<<< HEAD
     * @Route("/nuevo", name="country_new", methods={"GET","POST"})
=======
     * @Route("/new", name="country_new", methods={"GET","POST"})
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
     */
    public function new(Request $request): Response
    {
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($country);
            $entityManager->flush();

            return $this->redirectToRoute('country_index');
        }

        return $this->render('country/new.html.twig', [
            'country' => $country,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="country_show", methods={"GET"})
     */
    public function show(Country $country): Response
    {
        return $this->render('country/show.html.twig', [
            'country' => $country,
        ]);
    }

    /**
<<<<<<< HEAD
     * @Route("/{id}/editar", name="country_edit", methods={"GET","POST"})
=======
     * @Route("/{id}/edit", name="country_edit", methods={"GET","POST"})
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
     */
    public function edit(Request $request, Country $country): Response
    {
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('country_index');
        }

        return $this->render('country/edit.html.twig', [
            'country' => $country,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="country_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Country $country): Response
    {
        if ($this->isCsrfTokenValid('delete'.$country->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($country);
            $entityManager->flush();
        }

        return $this->redirectToRoute('country_index');
    }
<<<<<<< HEAD
    /**
     * @Route("/ciudad_pais", name="cities_by_country", condition="request.headers.get('X-Requested-With') == 'XMLHttpRequest'")
     */
    public function citiesByCountry(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $country_id = $request->request->get('country_id');
        $cities = $em->getRepository(City::class)->findByCountry($country_id);
        return new JsonResponse($cities);
    }
=======
>>>>>>> 1be157315573d9ef9a056ec3cff3e5cb2875fc19
}
