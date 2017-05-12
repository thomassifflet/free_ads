<?php
/**
 * Created by IntelliJ IDEA.
 * User: hikiyo
 * Date: 13/04/17
 * Time: 12:53
 */

namespace AnnoncesRepository;

use App\Annonces;

class DbAnnoncesRepository implements AnnoncesRepositoryInterface
{
    public function selectAll()
    {
        return Annonces::All();
    }

    public function find($id)
    {
        return Annonces::find($id);
    }
}