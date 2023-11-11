<?php

namespace Daw;

class apf {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll($userId){
        $stm = $this->sql->prepare("select user,pass from user where id_user = :id_user;");
        $stm->execute([':id_user' => $userId]);
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks;
    }
    public function getReserve(){
        $stm = $this->sql->prepare("select * from reserve");
        $stm->execute();
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks;
    }

    public function getapartamento(){
        $stm = $this->sql->prepare("select id_apartment,apartment_name,high_season_price,low_season_price,num_roms,postal_address,square_meter,latitude,longitude,descripcion,id_user,id_services,direction,img_url FROM apartment");
        $stm->execute();
        $apartamentos = array();
        
        while ($apartamento = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apartamentos[] = $apartamento;
        }
        return $apartamentos;
    }

    public function add($apartment_name,$high_season_price,$low_season_price,$num_roms,$postal_address,$square_meter,$latitude,$longitude,$descripcion,$id_user,$direction,$id_services,$img_url) {
        $stm = $this->sql->prepare('insert into apartment (apartment_name,high_season_price,low_season_price,num_roms,postal_address,square_meter,latitude,longitude,descripcion,id_user,direction,id_services,img_url) values (:apartment_name,:high_season_price,:low_season_price,:num_roms,:postal_address,:square_meter,:latitude,:longitude,:descripcion,:id_user,:direction,:id_services,:img_url);');
        $result = $stm->execute([':apartment_name' => $apartment_name,':high_season_price' => $high_season_price,':low_season_price' => $low_season_price,':num_roms' => $num_roms ,':postal_address'=> $postal_address,':square_meter'=> $square_meter,':latitude'=> $latitude,':longitude'=> $longitude,':descripcion' => $descripcion,':id_user'=> $id_user,":direction" =>$direction,":id_services"=> $id_services, ":img_url" => $img_url]);
    }

    public function delete($id) {
        $stm = $this->sql->prepare('delete from apartment where id_apartment = :id');
        $result = $stm->execute([':id' => $id]);
    }


    public function addReserve($id_user,$id_apartment,$entry_date,$departure_date,$num_rooms,$high_season_price,$low_season_price) {

        $first_semester_start = '2023-01-01';
        $first_semester_end = '2023-06-30';
        $second_semester_start = '2023-07-01';
        $second_semester_end = '2023-12-31';

    if ($entry_date >= $first_semester_start && $departure_date <= $first_semester_end) {
        // Las fechas están en el primer semestre
        $reserve_status = "reservado";
        $season_status = "alta";
        $apartment_status = "reservado";
        $price = $high_season_price;
    } elseif ($entry_date >= $second_semester_start && $departure_date <= $second_semester_end) {
        // Las fechas están en el segundo semestre
        $reserve_status = "reservado";
        $season_status = "baja";
        $apartment_status = "reservado";
        $price = $low_season_price;
    } else {
        // En caso de que no coincida con ninguna de las condiciones anteriores
        $reserve_status = "libre";
        $season_status = "alta";
        $apartment_status = "libre";
        $price = $high_season_price; 
    }

    $stm = $this->sql->prepare('INSERT INTO reserve (id_user, id_apartment, entry_date, departure_date, reserve_status, season_status, apartment_status, price, num_rooms) VALUES (:id_user, :id_apartment, :entry_date, :departure_date, :reserve_status, :season_status, :apartment_status, :price, :num_rooms)');
    $result = $stm->execute([
        ':id_user' => $id_user,
        ':id_apartment' => $id_apartment,
        ':entry_date' => $entry_date,
        ':departure_date' => $departure_date,
        ':reserve_status' => $reserve_status,
        ':season_status' => $season_status,
        ':apartment_status' => $apartment_status,
        ':price' => $price,
        ':num_rooms' => $num_rooms
    ]);

    }

    public function deleteReserve($res_id) {
        $stm = $this->sql->prepare('delete from reserve where id_reserve = :id');
        $result = $stm->execute([':id' => $res_id]);
    }

    public function deleteUser($usr_id) {
        $stm = $this->sql->prepare('delete from user where id_user = :id');
        $result = $stm->execute([':id' => $usr_id]);
    }

    public function editApartment($id_apartment,$apartment_name,$high_season_price,$low_season_price,$num_roms,$postal_address,$square_meter,$latitude,$longitude,$descripcion,$id_user,$direction,$id_services,$img_url) {
        $stm = $this->sql->prepare('UPDATE apartment SET apartment_name = :apartment_name, high_season_price = :high_season_price, low_season_price = :low_season_price, num_roms = :num_roms, postal_address = :postal_address, square_meter = :square_meter, latitude = :latitude, longitude = :longitude, descripcion = :descripcion, id_user = :id_user, direction = :direction, id_services = :id_services, img_url = :img_url  WHERE id_apartment = :id_apartment');
        $stm->execute([':id_apartment' => $id_apartment, ':apartment_name' => $apartment_name, ':high_season_price' => $high_season_price, ':low_season_price' => $low_season_price, ':num_roms' => $num_roms, ':postal_address' => $postal_address, ':square_meter' => $square_meter, ':latitude' => $latitude, ':longitude' => $longitude, ':descripcion' => $descripcion, ':id_user' => $id_user, ':direction' => $direction, ':id_services' => $id_services, ':img_url' => $img_url]);
    }

    function buscarApartamento($fecha_entrada, $fecha_salida, $num_roms) {
    $stm = $this->sql->prepare("select a.*
    FROM apartment a
    LEFT JOIN reserve r
    ON a.id_apartment = r.id_apartment
    AND r.entry_date <= :fecha_entrada
    AND r.departure_date >= :fecha_salida
    WHERE a.num_roms >= :num_roms
    AND r.id_apartment IS NULL
    ");
    
    $stm->bindParam(':fecha_entrada', $fecha_entrada);
    $stm->bindParam(':fecha_salida', $fecha_salida);
    $stm->bindParam(':num_roms', $num_roms, \PDO::PARAM_INT);
    
    $stm->execute();
    $apartamentos = array();
    
    while ($apartamento = $stm->fetch(\PDO::FETCH_ASSOC)) {
        $apartamentos[] = $apartamento;
    }
    
    return $apartamentos;
    }
}
