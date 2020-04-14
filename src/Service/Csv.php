<?php


namespace App\Service;



use App\Entity\Stations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Serializer;

class Csv
{


    /**
     * @var EntityManagerInterface
     */
    private $manager;
    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->serializer = new Serializer([], [new CsvEncoder(['csv_delimiter'=>';'])]);
    }

    public function ImportDatabase(SplFileInfo $file)
    {
        $datas = $this->serializer->decode($file->getContents(), 'csv');
        $match = 0;

        foreach($datas as $index => $data){

            $stations = new Stations();

            $stations->setGeoPoint($data['Geo Point']);
            $stations->setGeoShape((array) json_decode($data['Geo Shape']));
            $stations->setObjectid($data['OBJECTID']);
            $stations->setRefZdl($data['id_ref_zdl']);
            $stations->setStationName($data['nom_gare']);
            $stations->setLongName($data['nomlong']);
            $stations->setIvName($data['nom_iv']);
            $stations->setNumMod($data['num_mod']);
            $stations->setMode($data['mode_']);
            $stations->setFer($data['fer']);
            $stations->setTrain($data['train']);
            $stations->setRer($data['rer']);
            $stations->setMetro($data['metro']);
            $stations->setTramway($data['tramway']);
            $stations->setNavette($data['navette']);
            $stations->setVal($data['val']);
            $stations->setTerfer($data['terfer']);
            $stations->setTertrain($data['tertrain']);
            $stations->setTerrer($data['terrer']);
            $stations->setTermetro($data['termetro']);
            $stations->setTertram($data['tertram']);
            $stations->setTernavette($data['ternavette']);
            $stations->setTerval($data['terval']);
            $stations->setRefliga($data['idrefliga']);
            $stations->setRefligc($data['idrefligc']);
            $stations->setLine($data['ligne']);
            $stations->setCodLigf($data['cod_ligf']);
            $stations->setCodeLine($data['ligne_code']);
            $stations->setIndiceLig($data['indice_lig']);
            $stations->setReseau($data['reseau']);
            $stations->setResCom($data['res_com']);
            $stations->setCodResf($data['cod_resf']);
            $stations->setResStif($data['res_stif']);
            $stations->setExploitant($data['exploitant']);
            $stations->setNumPsr($data['num_psr']);
            $stations->setIdf($data['idf']);
            $stations->setPrincipal($data['principal']);
            $stations->setX($data['x']);
            $stations->sety($data['y']);

            $this->manager->persist($stations);
            if($match === 20){
                $match =0;
                $this->manager->flush();
            }
            $match++;
        }
    }
}
