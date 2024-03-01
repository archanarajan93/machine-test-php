<?php

namespace App;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\AnnotateImageResponse;

class ImageOcr
{
    public function detectText($image)
    {
        $imageAnnotator = new ImageAnnotatorClient();

        $image = file_get_contents($image);
        $image = base64_encode($image);

        $imageResource = fopen($image, 'r');
        $image = new \Google\Cloud\Vision\V1\Image();
        $request = new AnnotateImageRequest();
        $request->setImage($image);
        $request->setFeatures([new Type\DOCUMENT_TEXT_DETECTION() ]);

        $responses = $imageAnnotator->annotateImage($request);

        $text = '';

        foreach ($responses as $response) {
            foreach ($response->getFullTextAnnotation()->getPages() as $page) {
                foreach ($page->getBlocks() as $block) {
                    foreach ($block->getParagraphs() as $paragraph) {
                        foreach ($paragraph->getWords() as $word) {
                            $text .= $word->getSymbols()[0]->getText() . ' ';
                        }
                    }
                }
            }
        }

        fclose($imageResource);

        return $text;
    }
}