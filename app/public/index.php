<?php
    use App\Repository\LanguageRepository;

    require_once dirname(__FILE__) . '/../vendor/autoload.php';
    echo "Hello world!";

    $languageRepo = new LanguageRepository();
    
    $translation = $languageRepo->getTotalLanguages();

    print_r($translation[0]->total_languages);
?>
