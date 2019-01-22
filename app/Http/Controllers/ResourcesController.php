<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class ResourcesController extends Controller
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
        // White Papers
        $white_paper_entries = $this->CQUERY->getEntriesByContentType('whitePaper');
        $white_papers = $this->limitResourceArray($white_paper_entries);

        // Case Studies
        $case_study_entries = $this->CQUERY->getEntriesByContentType('caseStudy');
        $case_studies = $this->limitResourceArray($case_study_entries);

        // Ebooks
        $ebook_entries = $this->CQUERY->getEntriesByContentType('ebook');
        $ebooks = $this->limitResourceArray($ebook_entries);

        return view('resources.index', [
            'white_papers'  => $white_papers,
            'case_studies'  => $case_studies,
            'ebooks'        => $ebooks,
            'renderer'      => new \Contentful\RichText\Renderer(),
        ]);
    }

    public function limitResourceArray($entries)
    {
        $short_entries = [];
        foreach ($entries as $entry) {
            if (count($short_entries) >= 3) {
                break;
            }

            $short_entries[] = $entry;
        }

        return $short_entries;
    }
}
