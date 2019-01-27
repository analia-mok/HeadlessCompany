<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class HomeController extends Controller
{
    /**
     * @var CQuery
     */
    private $CQUERY;

    public function __construct(CQuery $query)
    {
        $this->CQUERY = $query;
    }

    public function index()
    {
        $result = $this->CQUERY->getEntriesByContentType('homePage');

        if (count($result) == 0) {
            abort(404);
        }

        $page = $result[0];
        $headless_img = $this->CQUERY->getAsset('n0utBXd2zRAIRlfBCIN0z');

        // Preparing Call To Actions
        $resources = $this->formatResourcesCTA();

        $data = [
            'page'      => $page,
            'hero_img'  => $headless_img,
            'services'  => $page->services,
            'resources' => $resources,
        ];

        return view('pages.index', $data);
    }

    public function formatResourcesCTA()
    {
        $case_studies = $this->CQUERY->getEntriesByContentType('caseStudy');
        $white_papers = $this->CQUERY->getEntriesByContentType('whitePaper');
        $ebooks = $this->CQUERY->getEntriesByContentType('ebook');

        $resources = [];
        $curr_case_study_index = 0;
        $curr_white_paper_index = 0;
        $curr_ebook_index = 0;

        if (count($case_studies) > 0) {
            $resources[] = $case_studies[$curr_case_study_index++];
        }

        if (count($white_papers) > 0) {
            $resources[] = $white_papers[$curr_white_paper_index++];
        }

        if (count($ebooks) > 0) {
            $resources[] = $ebooks[$curr_ebook_index++];
        }

        do {
            if ($curr_case_study_index < count($case_studies)) {
                $resources[] = $case_studies[$curr_case_study_index++];
            } elseif ($curr_white_paper_index < count($white_papers)) {
                $resources[] = $white_papers[$curr_white_paper_index++];
            } elseif ($curr_ebook_index < count($ebooks)) {
                $resources[] = $ebooks[$curr_ebook_index++];
            }
        } while (count($resources) < 4);

        return $resources;
    }
}
