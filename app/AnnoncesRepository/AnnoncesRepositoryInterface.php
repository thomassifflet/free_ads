<?php
/**
 * Created by IntelliJ IDEA.
 * User: hikiyo
 * Date: 13/04/17
 * Time: 12:52
 */

namespace AnnoncesRepository;

interface AnnoncesRepositoryInterface
{
    public function selectAll();

    public function find($id);
}