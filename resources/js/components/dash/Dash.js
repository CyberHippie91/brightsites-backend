

import Row from 'react-bootstrap/Row'
import Col from 'react-bootstrap/Col'
import Container from 'react-bootstrap/Container'
import Form from 'react-bootstrap/Form'
import LogoBanner from './resources/js/components/header/logobanner'
import Button from 'react-bootstrap/Button'
import Modal from 'react-bootstrap/Modal'
import Image from 'react-bootstrap/Image'
import Card from 'react-bootstrap/Card'
import { FaUserCircle } from "@react-icons/all-files/fa/FaUserCircle";
import EditModal from './resources/js/components/modal/modal'






export default class Dash extends Component {
  
  render() {
      return (
    <Container>
      <Row>
        <title>BRIGHTSITES</title>
        <link rel="icon" href="/favicon.ico" />
      </Row>
      <Row>
        <LogoBanner>

        </LogoBanner>
      </Row>
      <Row>
        <Container fluid="md" className="Dash">
          <Row>
              <Col className="LeftCol p-2 " sm={12} lg={6}>
                  <Card>
                    
                    <Card.Body>
                      <Card.Title>Create your article </Card.Title>
                      <Card.Text>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sagittis, urna sed ullamcorper venenatis, ligula enim varius ex, id dapibus felis ligula id elit.
                      </Card.Text>
                      <input type="text" class="form-control" id="inputTitle" placeholder="Type Title Here" /><br></br>
                      <input type="text" class="form-control" id="inputGenre" placeholder="Type Genre Here" /><br></br>

                      <textarea class="form-control" id="articleContent" rows="10" placeholder="Type Article Here"></textarea>
                      <Button  variant="bright" type="submit" size="lg" block>
                            Publish
                            </Button>
                    </Card.Body>
                  </Card> 
              </Col>
              <Col className="RightCol justify-content-center" >
                <Row className="TopRight justify-content-center">  
                  <h2 class="display-4">Article Database</h2>
                    <Form class="row g-3">
                      <Col >
                        <h3  style={{ textAlign: "left" }}>Search Articles</h3>
                      </Col>
                      <Col>
                        
                        <input type="text" class="form-control" id="inputArticle" placeholder="Type here" />
                        <Button  variant="bright" type="submit" size="lg" block>
                            Search
                            </Button><br></br>
                             <Button  variant="bright" type="submit" size="lg" block>
                            Show All
                            </Button>
                      </Col>
                      
                    </Form>
                
                </Row>
                <Row className="BottomRight justify-content-center">
                  
                <h2 class="display-4">Your Profile</h2>
                <Col>
                    <Button className="profileB" onClick={EditModal}>
                      <h4>Edit Profile</h4>
                      <FaUserCircle />
                    
                      </Button>
                  </Col>
                  <Col>
                    <Button className="profileB">
                      <h4>Delete</h4>
                      <FaUserCircle />
                    </Button>
                  </Col>
                  <Col>
                    <Button className="profileB">
                      <h4>Logout</h4>
                      <FaUserCircle />
                    </Button>
                  </Col>
                </Row>
              </Col>

          </Row>
        </Container>
      </Row>
   
      
    
     <Row>
      <footer class="footer justify-content-center">
        <h5>alfal</h5>
      </footer>
      </Row>
      </Container>
 
    )}
      }
