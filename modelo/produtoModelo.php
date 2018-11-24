 <?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM tblproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();

    while ($produto = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $produto;
        

    }
   

    return $produtos;
}

function pegar5Produtos() {
    
    
    $sql = "SELECT * FROM tblproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    
    for($i=0;$i<5;$i++){
    $produto = mysqli_fetch_assoc($resultado); 
    $produtos[] = $produto;
        

    }
   

    return $produtos;
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM tblproduto WHERE idProduto= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function adicionarProduto($descricao, $preco, $imagem, $idCategoria, $sobre, $qtEstoque) {

   

    $sql = "INSERT INTO tblproduto (descricao, preco, imagem, idCategoria, sobre, qtEstoque) 
			VALUES ('$descricao', '$preco', '$imagem[name]', '$idCategoria', '$sobre', '$qtEstoque')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}


function deletarProduto($id) {
    $sql = "DELETE FROM tblproduto WHERE idProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}

function editarProduto($id,$descricao, $preco, $imagem, $idCategoria, $sobre, $qtEstoque){
$sql = "UPDATE tblProduto SET descricao = '$descricao', preco = '$preco', imagem = '$imagem', idCategoria = '$idCategoria' , sobre ='$sobre', qtEstoque='$qtEstoque' WHERE idProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar Produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}


function buscarProduto($produto){

$sql = "SELECT * FROM tblProduto WHERE descricao LIKE '%$produto%';" ;
    $resultado = mysqli_query($cnx = conn(), $sql);
    

while($registros= mysqli_fetch_assoc($resultado)){


    $produtos[]=$registros;
}

if(empty($produtos)){
    
}else{

    return $produtos;
}



}


function pegarVariosProdutosPorId($carrinhoProdutos){
            for ($i=0; $i < count($carrinhoProdutos); $i++) {
                $id = $carrinhoProdutos[$i];
                $comando    = "SELECT * FROM tblproduto WHERE idproduto = '$id'";
                $query  = mysqli_query($cnx = conn(),$comando); 
                
                if(!$query) {
                    die(mysqli_error($cnx));
                }
                $produtos[] = mysqli_fetch_assoc($query); 
            }
            if(!empty($produtos)){
                return $produtos;
            }
        }



?>