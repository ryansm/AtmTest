<?php

namespace App\Repository;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerRepository {

    /**
     * Registra o usuário na tabela customers
     * @param  Customer  $data
     * 
     * @return Customer
     */
    public function create(Customer $data)
    {
        $customer = Customer::create($data->getAttributes());
        
        return $customer;
    }

    /**
     * Retorna todos as entidades da tabela customers
     */
    public function findAll()
    {
        $model = new Customer();
        return DB::table($model->getTable())->paginate(20);
    }

    /**
     * Busca o customer através do ID
     * @param  int  $id
     * 
     * @return Customer
     */
    public function find(Int $id)
    {
        return Customer::find($id);
    }

    /**
     * Atualiza o usuário na tabela customers
     * @param Customer $data
     * @param Int $id
     * @return Customer
     */
    public function update(Customer $data, Int $id)
    {
        return Customer::find($id)->update($data->getAttributes());
    }

    /**
     * Deleta o customer através do ID
     * @param  int  $id
     * 
     */
    public function delete(Int $id)
    {
        return Customer::destroy($id);
    }
}