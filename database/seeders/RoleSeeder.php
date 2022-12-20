<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ROLES
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Empleado']);
        $role3 = Role::create(['name' => 'Cliente']);

        // DASHBOARD
        Permission::create([
            'name' => 'admin.home',
            'descripcion' => 'Dashboard'
        ])->syncRoles([$role1, $role2]);

        // USUARIOS
        Permission::create([
            'name' => 'admin.activitylog.index',
            'descripcion' => 'REGISTRO DE ACTIVIDADES'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.menu',
            'descripcion' => 'MENU USUARIOS'
        ])->syncRoles([$role1]);
        //---------------------------------------------------
        Permission::create([
            'name' => 'users.index',
            'descripcion' => 'Listar usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.create',
            'descripcion' => 'Crear usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.show',
            'descripcion' => 'Ver usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.edit',
            'descripcion' => 'Editar usuario'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.destroy',
            'descripcion' => 'Eliminar usuario'
        ])->syncRoles([$role1]);

        // PERMISOS
        Permission::create([
            'name' => 'roles.index',
            'descripcion' => 'Listar roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.create',
            'descripcion' => 'Crear rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.show',
            'descripcion' => 'Ver rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.edit',
            'descripcion' => 'Editar rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.destroy',
            'descripcion' => 'Eliminar rol'
        ])->syncRoles([$role1]);
        //---------------------------------------------------
        // REGISTROS DE ACTIVIDADES (BITACORA)
        Permission::create([
            'name' => 'registros.index',
            'descripcion' => 'Ver reportes',
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'registros.create',
            'descripcion' => 'Crear reportes',
        ])->syncRoles([$role1]);

        // MODULO PERSONAS
        Permission::create([
            'name' => 'admin.personas.menu',
            'descripcion' => 'MENU PERSONAS'
        ])->syncRoles([$role1, $role2]);
        //---------------------------------------------------
        // EMPLEADOS
        Permission::create([
            'name' => 'admin.empleados.index',
            'descripcion' => 'Listar empleados'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.empleados.create',
            'descripcion' => 'Crear empleado'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.empleados.show',
            'descripcion' => 'Ver empleado'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.empleados.edit',
            'descripcion' => 'Editar empleado'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.empleados.destroy',
            'descripcion' => 'Eliminar empleado'
        ])->syncRoles([$role1, $role2]);

        // CLIENTES
        Permission::create([
            'name' => 'admin.clientes.index',
            'descripcion' => 'Listar clientes'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.clientes.create',
            'descripcion' => 'Crear cliente'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.clientes.show',
            'descripcion' => 'Ver cliente'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.clientes.edit',
            'descripcion' => 'Editar cliente'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.clientes.destroy',
            'descripcion' => 'Eliminar cliente'
        ])->syncRoles([$role1, $role2]);

        // PROVEEDORES
        Permission::create([
            'name' => 'admin.proveedores.index',
            'descripcion' => 'Listar proveedores'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proveedores.create',
            'descripcion' => 'Crear proveedor'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proveedores.show',
            'descripcion' => 'Ver proveedor'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proveedores.edit',
            'descripcion' => 'Editar proveedor'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proveedores.destroy',
            'descripcion' => 'Eliminar proveedor'
        ])->syncRoles([$role1, $role2]);

        //---------------------------------------------------
        // MODULO ENTRADAS Y SALIDAS
        Permission::create([
            'name' => 'admin.notas.menu',
            'descripcion' => 'MENU ENTRADAS Y SALIDAS'
        ])->syncRoles([$role1, $role2]);
        // FACTURAS
        Permission::create([
            'name' => 'admin.facturas.index',
            'descripcion' => 'Listar facturas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.facturas.create',
            'descripcion' => 'Crear facturas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.facturas.show',
            'descripcion' => 'Ver factura'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.facturas.edit',
            'descripcion' => 'Editar facturas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.facturas.destroy',
            'descripcion' => 'Eliminar facturas'
        ])->syncRoles([$role1, $role2]);

        //ENTRADAS
        Permission::create([
            'name' => 'admin.entradas.index',
            'descripcion' => 'Listar entradas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.entradas.create',
            'descripcion' => 'crear entradas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.entradas.show',
            'descripcion' => 'mostrar entradas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.entradas.edit',
            'descripcion' => 'editar entradas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.entradas.destroy',
            'descripcion' => 'eliminar entradas'
        ])->syncRoles([$role1, $role2]);

        // SALIDAS
        Permission::create([
            'name' => 'admin.salidas.index',
            'descripcion' => 'Listar salidas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.salidas.create',
            'descripcion' => 'Crear salidas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.salidas.show',
            'descripcion' => 'Ver salidas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.salidas.edit',
            'descripcion' => 'Editar salidas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.salidas.destroy',
            'descripcion' => 'Eliminar salidas'
        ])->syncRoles([$role1, $role2]);

        // NOTAS
        Permission::create([
            'name' => 'admin.notas.index',
            'descripcion' => 'Listar notas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.notas.create',
            'descripcion' => 'Crear notas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.notas.show',
            'descripcion' => 'Ver nota'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.notas.edit',
            'descripcion' => 'Editar notas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.notas.destroy',
            'descripcion' => 'Eliminar notas'
        ])->syncRoles([$role1, $role2]);

        //---------------------------------------------------
        // MODULO PRODUCTOS Y SERVICIOS
        Permission::create([
            'name' => 'admin.productos.menu',
            'descripcion' => 'MENU PRODUCTOS Y SERVICIOS'
        ])->syncRoles([$role1, $role2]);
        // SERVICIOS
        Permission::create([
            'name' => 'admin.servicios.index',
            'descripcion' => 'Listar servicios'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.servicios.create',
            'descripcion' => 'Crear servicios'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.servicios.show',
            'descripcion' => 'Ver servicio'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.servicios.edit',
            'descripcion' => 'Editar servicios'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.servicios.destroy',
            'descripcion' => 'Eliminar servicios'
        ])->syncRoles([$role1, $role2]);

        // MATERIALES
        Permission::create([
            'name' => 'admin.materiales.index',
            'descripcion' => 'Listar materiales'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.materiales.create',
            'descripcion' => 'Crear materiales'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.materiales.show',
            'descripcion' => 'Ver material'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.materiales.edit',
            'descripcion' => 'Editar materiales'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.materiales.destroy',
            'descripcion' => 'Eliminar materiales'
        ])->syncRoles([$role1, $role2]);

        //---------------------------------------------------
        // MODULO PROYECTOS
        // PRESUPUESTOS
        Permission::create([
            'name' => 'admin.presupuestos.index',
            'descripcion' => 'Listar presupuestos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.presupuestos.create',
            'descripcion' => 'Crear presupuestos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.presupuestos.show',
            'descripcion' => 'Ver presupuesto'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.presupuestos.edit',
            'descripcion' => 'Editar presupuestos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.presupuestos.destroy',
            'descripcion' => 'Eliminar presupuestos'
        ])->syncRoles([$role1, $role2]);

        // PROYECTOS
        Permission::create([
            'name' => 'admin.proyectos.index',
            'descripcion' => 'Listar proyectos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proyectos.create',
            'descripcion' => 'Crear proyectos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proyectos.show',
            'descripcion' => 'Ver proyecto'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proyectos.edit',
            'descripcion' => 'Editar proyectos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.proyectos.destroy',
            'descripcion' => 'Eliminar proyectos'
        ])->syncRoles([$role1, $role2]);

        // CONTRATOS
        Permission::create([
            'name' => 'admin.contratos.index',
            'descripcion' => 'Listar contratos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.contratos.create',
            'descripcion' => 'Crear contratos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.contratos.show',
            'descripcion' => 'Ver contrato'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.contratos.edit',
            'descripcion' => 'Editar contratos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.contratos.destroy',
            'descripcion' => 'Eliminar contratos'
        ])->syncRoles([$role1, $role2]);

        // DOCUMENTOS
        Permission::create([
            'name' => 'admin.documentos.index',
            'descripcion' => 'Listar documentos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.documentos.create',
            'descripcion' => 'Crear documentos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.documentos.show',
            'descripcion' => 'Ver documento'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.documentos.edit',
            'descripcion' => 'Editar documentos'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.documentos.destroy',
            'descripcion' => 'Eliminar documentos'
        ])->syncRoles([$role1, $role2]);

        // INFORMES
        Permission::create([
            'name' => 'admin.informes.index',
            'descripcion' => 'Listar informes'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.informes.create',
            'descripcion' => 'Crear informes'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.informes.show',
            'descripcion' => 'Ver informe'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.informes.edit',
            'descripcion' => 'Editar informes'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.informes.destroy',
            'descripcion' => 'Eliminar informes'
        ])->syncRoles([$role1, $role2]);
    }
}
